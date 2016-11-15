(function(){
Template.__checkName("contact");
Template["contact"] = new Template("Template.contact", (function() {
  var view = this;
  return HTML.DIV({
    "class": "section"
  }, "\n		", HTML.DIV({
    "class": "row"
  }, "\n			", HTML.DIV({
    "class": "col s12 offset-m3 m6"
  }, "\n				", HTML.DIV({
    "class": "icon-block card"
  }, "\n					", HTML.Raw('<h5 class="center">Contact with the bank</h5>'), "\n					", HTML.FORM({
    "class": "col s12"
  }, "\n						", HTML.Raw('<div id="inputs1" class="row">\n							<div class="input-field col s6">\n								<i class="mdi-action-account-circle prefix"></i>\n								<input id="icon_prefix" type="email" name="email" class="validate">\n								<label style="color: #9e9e9e !important;" for="icon_prefix">E-mail</label>\n							</div>\n							<div class="input-field col s6">\n								<i class="mdi-communication-phone prefix"></i>\n								<input id="icon_telephone" type="tel" name="phone" class="validate">\n								<label style="color: #9e9e9e !important;" for="icon_telephone">Telephone</label>\n							</div>\n						</div>'), "\n						", HTML.Raw('<div id="spinner" class="row center hide">\n							<div class="preloader-wrapper big active">\n								<div class="spinner-layer spinner-blue">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n\n								<div class="spinner-layer spinner-red">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n\n								<div class="spinner-layer spinner-yellow">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n\n								<div class="spinner-layer spinner-green">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n							</div>\n						</div>'), "\n						", HTML.Raw('<div id="message" class="row hide">\n							<h6 class="center">Message send. Thank you :)</h6>\n						</div>'), "\n						", HTML.DIV({
    id: "inputs2",
    "class": "row"
  }, "\n							", HTML.DIV({
    "class": "input-field col s12"
  }, "\n								", HTML.TEXTAREA({
    id: "textarea1",
    "class": "materialize-textarea"
  }), "\n								", HTML.Raw('<label style="color: #9e9e9e !important;" for="textarea1">Question/Request</label>'), "\n							"), "\n							", HTML.Raw('<a id="submit" class="btn waves-effect waves-light green">Submit\n								<i class="mdi-content-send right"></i>\n							</a>'), "\n						"), "\n					"), "\n				"), "\n			"), "\n		"), "\n	");
}));

})();
