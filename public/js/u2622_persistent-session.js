//////////////////////////////////////////////////////////////////////////
//                                                                      //
// This is a generated file. You can view the original                  //
// source in your browser if your browser supports source maps.         //
//                                                                      //
// If you are using Chrome, open the Developer Tools and click the gear //
// icon in its lower right corner. In the General Settings panel, turn  //
// on 'Enable source maps'.                                             //
//                                                                      //
// If you are using Firefox 23, go to `about:config` and set the        //
// `devtools.debugger.source-maps-enabled` preference to true.          //
// (The preference should be on by default in Firefox 24; versions      //
// older than 23 do not support source maps.)                           //
//                                                                      //
//////////////////////////////////////////////////////////////////////////


(function () {

/* Imports */
var Meteor = Package.meteor.Meteor;
var $ = Package.jquery.$;
var jQuery = Package.jquery.jQuery;
var Session = Package.session.Session;
var _ = Package.underscore._;
var EJSON = Package.ejson.EJSON;

/* Package-scope variables */
var PersistentSession;

(function () {

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                             //
// packages/u2622:persistent-session/lib/persistent_session.js                                                 //
//                                                                                                             //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                                                                               //
/*                                                                                                             // 1
 * Used to determine if we need to migrate how the data is stored.                                             // 2
 * Each time the data format changes, increment this number.                                                   // 3
 */                                                                                                            // 4
var PSA_DATA_VERSION = 1;                                                                                      // 5
                                                                                                               // 6
// === INITIALIZE KEY TRACKING ===                                                                             // 7
Session.psKeys = {};                                                                                           // 8
Session.psKeyList = [];                                                                                        // 9
Session.psaKeys = {};                                                                                          // 10
Session.psaKeyList = [];                                                                                       // 11
                                                                                                               // 12
// initialize default method setting                                                                           // 13
var default_method = 'temporary'; // valid options: 'temporary', 'persistent', 'authenticated'                 // 14
if (Meteor.settings &&                                                                                         // 15
    Meteor.settings.public &&                                                                                  // 16
    Meteor.settings.public.persistent_session) {                                                               // 17
  default_method = Meteor.settings.public.persistent_session.default_method;                                   // 18
}                                                                                                              // 19
                                                                                                               // 20
// === LOCAL STORAGE INTERACTION ===                                                                           // 21
Session.store = function _psStore(type, key, value) {                                                          // 22
                                                                                                               // 23
  this.psKeyList  = amplify.store('__PSKEYS__') || [];                                                         // 24
  this.psaKeyList = amplify.store('__PSAKEYS__')|| [];                                                         // 25
                                                                                                               // 26
  if (type == 'get') {                                                                                         // 27
    return amplify.store(key);                                                                                 // 28
                                                                                                               // 29
  } else {                                                                                                     // 30
                                                                                                               // 31
    this.psKeyList  = _.without(this.psKeyList, key);                                                          // 32
    this.psaKeyList = _.without(this.psaKeyList, key);                                                         // 33
    delete this.psKeys[key];                                                                                   // 34
    delete this.psaKeys[key];                                                                                  // 35
                                                                                                               // 36
    if (value===undefined || value===null || type=='temporary') {                                              // 37
      value = null;                                                                                            // 38
                                                                                                               // 39
    } else if (type=='persistent') {                                                                           // 40
      this.psKeys[key] = EJSON.stringify(value);                                                               // 41
      this.psKeyList = _.union(this.psKeyList, [key]);                                                         // 42
                                                                                                               // 43
    } else if (type=='authenticated') {                                                                        // 44
      this.psaKeys[key] = EJSON.stringify(value);                                                              // 45
      this.psaKeyList = _.union(this.psaKeyList, [key]);                                                       // 46
    }                                                                                                          // 47
                                                                                                               // 48
    amplify.store('__PSKEYS__', this.psKeyList);                                                               // 49
    amplify.store('__PSAKEYS__', this.psaKeyList);                                                             // 50
    amplify.store(key, EJSON.stringify(value));                                                                // 51
  }                                                                                                            // 52
                                                                                                               // 53
};                                                                                                             // 54
                                                                                                               // 55
// === GET ===                                                                                                 // 56
Session.old_get = Session.get;                                                                                 // 57
Session.get = function _psGet(key) {                                                                           // 58
  var val = this.old_get(key);                                                                                 // 59
  var psVal;                                                                                                   // 60
  var unparsedPsVal = Session.store('get', key);                                                               // 61
  if (unparsedPsVal !== undefined) {                                                                           // 62
    psVal = EJSON.parse(Session.store('get', key));                                                            // 63
  }                                                                                                            // 64
  /*                                                                                                           // 65
   * We can't do `return psVal || val;` here, as when psVal = undefined and                                    // 66
   * val = 0, it will return undefined, even though 0 is the correct value.                                    // 67
   */                                                                                                          // 68
  if (psVal === undefined || psVal === null) {                                                                 // 69
    return val;                                                                                                // 70
  }                                                                                                            // 71
  return psVal;                                                                                                // 72
};                                                                                                             // 73
                                                                                                               // 74
// === SET ===                                                                                                 // 75
// defaults to a persistent, non-authenticated variable                                                        // 76
Session.old_set = Session.set;                                                                                 // 77
Session.set = function _psSet(keyOrObject, value, persist, auth) {                                             // 78
                                                                                                               // 79
  // Taken from https://github.com/meteor/meteor/blob/107d858/packages/reactive-dict/reactive-dict.js          // 80
  if ((typeof keyOrObject === 'object') && (value === undefined)) {                                            // 81
    this._psSetObject(keyOrObject, persist, auth);                                                             // 82
    return;                                                                                                    // 83
  }                                                                                                            // 84
                                                                                                               // 85
  var key = keyOrObject;                                                                                       // 86
                                                                                                               // 87
  this.old_set(key, value);                                                                                    // 88
  var type = 'temporary';                                                                                      // 89
  if (persist || (persist===undefined && (default_method=='persistent' || default_method=='authenticated'))) { // 90
    if (auth || (persist===undefined && auth===undefined && default_method=='authenticated')) {                // 91
      type = 'authenticated';                                                                                  // 92
    } else {                                                                                                   // 93
      type = 'persistent';                                                                                     // 94
    }                                                                                                          // 95
  }                                                                                                            // 96
  Session.store(type, key, value);                                                                             // 97
};                                                                                                             // 98
                                                                                                               // 99
Session._psSetObject = function _psSetObject(object, persist, auth) {                                          // 100
  var self = this;                                                                                             // 101
                                                                                                               // 102
  _.each(object, function (value, key){                                                                        // 103
    self.set(key, value, persist, auth);                                                                       // 104
  });                                                                                                          // 105
};                                                                                                             // 106
                                                                                                               // 107
// === SET TEMPORARY ===                                                                                       // 108
// alias to Session.set(); sets a non-persistent variable                                                      // 109
Session.setTemp = function _psSetTemp(keyOrObject, value) {                                                    // 110
  this.set(keyOrObject, value, false, false);                                                                  // 111
};                                                                                                             // 112
                                                                                                               // 113
// === SET PERSISTENT ===                                                                                      // 114
// alias to Session.set(); sets a persistent variable                                                          // 115
Session.setPersistent = function _psSetPersistent(keyOrObject, value) {                                        // 116
  this.set(keyOrObject, value, true, false);                                                                   // 117
};                                                                                                             // 118
                                                                                                               // 119
// === SET AUTHENTICATED ===                                                                                   // 120
// alias to Session.set(); sets a persistent variable that will be removed on logout                           // 121
Session.setAuth = function _psSetAuth(keyOrObject, value) {                                                    // 122
  this.set(keyOrObject, value, true, true);                                                                    // 123
};                                                                                                             // 124
                                                                                                               // 125
// === MAKE TEMP / PERSISTENT / AUTH ===                                                                       // 126
// change the type of session var                                                                              // 127
Session.makeTemp = function _psMakeTemp(key) {                                                                 // 128
  this.store('temporary', key);                                                                                // 129
};                                                                                                             // 130
Session.makePersistent = function _psMakePersistent(key) {                                                     // 131
  var val = this.get(key);                                                                                     // 132
  this.store('persistent', key, val);                                                                          // 133
};                                                                                                             // 134
Session.makeAuth = function _psMakeAuth(key) {                                                                 // 135
  var val = this.get(key);                                                                                     // 136
  this.store('authenticated', key, val);                                                                       // 137
};                                                                                                             // 138
                                                                                                               // 139
// === CLEAR ===                                                                                               // 140
Session.clear = function _psClear(key, list) {                                                                 // 141
                                                                                                               // 142
  // remove all keys with Session.clear();                                                                     // 143
  if (key === undefined) {                                                                                     // 144
    if (list===undefined) { list = this.keys; }                                                                // 145
    for (var k in list) {                                                                                      // 146
      this.set(k, undefined, false, false);                                                                    // 147
    }                                                                                                          // 148
                                                                                                               // 149
  // remove a single key with Session.clear('key');                                                            // 150
  } else {                                                                                                     // 151
    this.set(key, undefined, false, false);                                                                    // 152
  }                                                                                                            // 153
                                                                                                               // 154
};                                                                                                             // 155
                                                                                                               // 156
// === CLEAR TEMP ===                                                                                          // 157
// clears all the temporary keys                                                                               // 158
Session.clearTemp = function _psClearTemp() {                                                                  // 159
  this.clear(undefined, _.keys(_.omit(this.keys, this.psKeys, this.psaKeys)));                                 // 160
};                                                                                                             // 161
                                                                                                               // 162
// === CLEAR PERSISTENT ===                                                                                    // 163
// clears all persistent keys                                                                                  // 164
Session.clearPersistent = function _psClearPersistent() {                                                      // 165
  this.clear(undefined, this.psKeys);                                                                          // 166
};                                                                                                             // 167
                                                                                                               // 168
// === CLEAR AUTH ===                                                                                          // 169
// clears all authenticated keys                                                                               // 170
Session.clearAuth = function _psClearAuth() {                                                                  // 171
  this.clear(undefined, this.psaKeys);                                                                         // 172
};                                                                                                             // 173
                                                                                                               // 174
// === UPDATE ===                                                                                              // 175
// updates the value of a session var without changing its type                                                // 176
Session.update = function _psUpdate(key, value) {                                                              // 177
  var persist, auth;                                                                                           // 178
  if ( _.indexOf(this.psaKeyList, key) >= 0 ) { auth = true; }                                                 // 179
  if ( auth || _.indexOf(this.psKeyList, key) >= 0 ) { persist = true; }                                       // 180
  this.set(key, value, persist, auth);                                                                         // 181
};                                                                                                             // 182
                                                                                                               // 183
// === SET DEFAULT ===                                                                                         // 184
Session.old_setDefault = Session.setDefault;                                                                   // 185
Session.setDefault = function _psSetDefault(key, value, persist, auth) {                                       // 186
  if ( this.get(key) === undefined) {                                                                          // 187
    this.set(key, value, persist, auth);                                                                       // 188
  }                                                                                                            // 189
};                                                                                                             // 190
                                                                                                               // 191
// === SET DEFAULT TEMP ===                                                                                    // 192
Session.setDefaultTemp = function _psSetDefaultTemp(key, value) {                                              // 193
  this.setDefault(key, value, false, false);                                                                   // 194
};                                                                                                             // 195
                                                                                                               // 196
// === SET DEFAULT PERSISTENT ===                                                                              // 197
Session.setDefaultPersistent = function _psSetDefaultPersistent(key, value) {                                  // 198
  this.setDefault(key, value, true, false);                                                                    // 199
};                                                                                                             // 200
                                                                                                               // 201
// === SET DEFAULT AUTH ===                                                                                    // 202
Session.setDefaultAuth = function _psSetDefaultAuth(key, value) {                                              // 203
  this.setDefault(key, value, true, true);                                                                     // 204
};                                                                                                             // 205
                                                                                                               // 206
                                                                                                               // 207
// === HOUSEKEEPING ===                                                                                        // 208
                                                                                                               // 209
/*                                                                                                             // 210
 * Converts previously stored values into EJSON compatible formats.                                            // 211
 */                                                                                                            // 212
function migrateToEJSON() {                                                                                    // 213
  if (amplify.store('__PSDATAVERSION__') >= PSA_DATA_VERSION) {                                                // 214
    return;                                                                                                    // 215
  }                                                                                                            // 216
                                                                                                               // 217
  var psKeyList = amplify.store('__PSKEYS__');                                                                 // 218
  var psaKeyList = amplify.store('__PSAKEYS__');                                                               // 219
                                                                                                               // 220
  _.each([psKeyList, psaKeyList], function(list) {                                                             // 221
    _.each(list, function(key) {                                                                               // 222
      amplify.store(key, EJSON.stringify(amplify.store(key)));                                                 // 223
    });                                                                                                        // 224
  });                                                                                                          // 225
                                                                                                               // 226
  amplify.store('__PSDATAVERSION__', PSA_DATA_VERSION);                                                        // 227
}                                                                                                              // 228
                                                                                                               // 229
                                                                                                               // 230
if (Meteor.isClient) {                                                                                         // 231
                                                                                                               // 232
  // --- on startup, load persistent data back into meteor session ---                                         // 233
  Meteor.startup(function(){                                                                                   // 234
    var val;                                                                                                   // 235
                                                                                                               // 236
    migrateToEJSON();                                                                                          // 237
                                                                                                               // 238
    // persistent data                                                                                         // 239
    var psList = amplify.store('__PSKEYS__');                                                                  // 240
    if ( typeof psList == "object" && psList.length!==undefined ) {                                            // 241
      for (var i=0; i<psList.length; i++) {                                                                    // 242
        if (!_.has(Session.keys, psList[i])) {                                                                 // 243
          val = Session.get(psList[i]);                                                                        // 244
          Session.set(psList[i], val, true, false);                                                            // 245
        }                                                                                                      // 246
      }                                                                                                        // 247
    }                                                                                                          // 248
                                                                                                               // 249
    // authenticated data                                                                                      // 250
    var psaList = amplify.store('__PSAKEYS__');                                                                // 251
    if ( typeof psaList == "object" && psaList.length!==undefined ) {                                          // 252
      for (var i=0; i<psaList.length; i++) {                                                                   // 253
        if (!_.has(Session.keys, psaList[i])) {                                                                // 254
          val = Session.get(psaList[i]);                                                                       // 255
          Session.setAuth(psaList[i], val, true, true);                                                        // 256
        }                                                                                                      // 257
      }                                                                                                        // 258
    }                                                                                                          // 259
                                                                                                               // 260
  });                                                                                                          // 261
                                                                                                               // 262
  // --- clear authenticated data on logout ---                                                                // 263
  var _logout = Meteor.logout;                                                                                 // 264
  Meteor.logout = function _psLogout() {                                                                       // 265
    Session.clearAuth();                                                                                       // 266
    _logout.apply(Meteor, arguments);                                                                          // 267
  };                                                                                                           // 268
                                                                                                               // 269
}                                                                                                              // 270
                                                                                                               // 271
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}).call(this);


/* Exports */
if (typeof Package === 'undefined') Package = {};
Package['u2622:persistent-session'] = {
  PersistentSession: PersistentSession
};

})();
