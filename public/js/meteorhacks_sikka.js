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
var Mongo = Package.mongo.Mongo;
var _ = Package.underscore._;
var MeteorX = Package['meteorhacks:meteorx'].MeteorX;
var Picker = Package['meteorhacks:picker'].Picker;
var Cookie = Package['chuangbo:cookie'].Cookie;

/* Package-scope variables */
var sikkaCommands;

(function () {

/////////////////////////////////////////////////////////////////////////////////
//                                                                             //
// packages/meteorhacks:sikka/lib/client/core.js                               //
//                                                                             //
/////////////////////////////////////////////////////////////////////////////////
                                                                               //
// setToken when re-connecting                                                 // 1
var originalReconnect = Meteor.connection.onReconnect;                         // 2
Meteor.connection.onReconnect = function() {                                   // 3
  setToken();                                                                  // 4
  if(originalReconnect) {                                                      // 5
    originalReconnect();                                                       // 6
  }                                                                            // 7
};                                                                             // 8
                                                                               // 9
if(Meteor.status().connected) {                                                // 10
  setToken();                                                                  // 11
}                                                                              // 12
                                                                               // 13
function setToken() {                                                          // 14
  var firewallHumanToken = Cookie.get('sikka-human-token');                    // 15
  Meteor.call('setSikkaHumanToken', firewallHumanToken);                       // 16
}                                                                              // 17
                                                                               // 18
// reloading the page                                                          // 19
window.sikkaCommands = sikkaCommands = new Mongo.Collection('sikka-commands'); // 20
sikkaCommands.find({}).observe({                                               // 21
  added: function(command) {                                                   // 22
    if(command._id === "reload") {                                             // 23
      location.reload();                                                       // 24
    }                                                                          // 25
  }                                                                            // 26
});                                                                            // 27
/////////////////////////////////////////////////////////////////////////////////

}).call(this);


/* Exports */
if (typeof Package === 'undefined') Package = {};
Package['meteorhacks:sikka'] = {};

})();
