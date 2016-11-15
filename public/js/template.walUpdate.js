(function(){
Template.__checkName("walUpdate");
Template["walUpdate"] = new Template("Template.walUpdate", (function() {
  var view = this;
  return [ HTML.Raw('<div id="index-banner" class="parallax-container valign-wrapper">\n		<div class="section no-pad-bot valign">\n			<div class="container center">\n				<div class="row center">\n					<div class="darkened-centered-box large-font">\n						<img style="display: inline-block;" class="circle" src="Revoluta-one-worthalot.png">\n						<div style="display: block;">Worthalot</div>\n					</div>\n				</div>\n				<div class="row center">\n					<div class="darkened-centered-box medium-font">\n						<span>To validate someone valuable</span>\n					</div>\n				</div>\n			</div>\n		</div>\n		<div class="parallax"><img src="ow3d.jpg" alt="Unsplashed background img 2"></div>\n	</div>\n\n	'), HTML.DIV({
    id: "revaluta",
    "class": "container"
  }, "\n		", HTML.DIV({
    "class": "section"
  }, "\n			", HTML.Raw('<div class="row">\n				<h5 class="center">Worthalot</h5>\n			</div>'), "\n			", HTML.DIV({
    "class": "row"
  }, "\n				", HTML.DIV({
    "class": "col s12 offset-m2 m8"
  }, "\n          ", Blaze.If(function() {
    return Spacebars.call(view.templateInstance().subscriptionsReady());
  }, function() {
    return [ "\n					", Blaze.Each(function() {
      return Spacebars.call(view.lookup("history"));
    }, function() {
      return [ "\n						", HTML.DIV({
        "class": "card green"
      }, "\n							", HTML.DIV({
        "class": "card-content white-text"
      }, "\n								", HTML.SPAN({
        "class": "card-title"
      }, "Dear ", Blaze.View("lookup:receiver", function() {
        return Spacebars.mustache(view.lookup("receiver"));
      })), "\n								", HTML.P(Blaze.View("lookup:message", function() {
        return Spacebars.mustache(view.lookup("message"));
      })), "\n							"), "\n							", HTML.DIV({
        "class": "card-action"
      }, "\n								", HTML.P("From: ", Blaze.View("lookup:giver", function() {
        return Spacebars.mustache(view.lookup("giver"));
      }), "  (", Blaze.View("lookup:dateExchange", function() {
        return Spacebars.mustache(view.lookup("dateExchange"));
      }), ")"), "\n							"), "\n						"), "\n					" ];
    }), "\n          " ];
  }), "\n				"), "\n			"), "\n			", HTML.DIV({
    "class": "row"
  }, "\n				", HTML.DIV({
    "class": "col s12 offset-m3 m6"
  }, "\n					", HTML.Raw('<h4 class="center">Give it to the next person</h4>'), "\n					", HTML.DIV({
    "class": "icon-block card"
  }, "\n						", HTML.FORM({
    "class": "col s12"
  }, "\n							", HTML.Raw('<div class="row">\n								<div class="input-field col s6">\n									<i class="mdi-action-account-circle prefix"></i>\n									<input id="icon_prefix" required="" pattern=".{2,}" title="2 characters minimum" type="text" name="fullname" class="validate">\n									<label style="color: #9e9e9e !important;" for="icon_prefix">Person\'s name</label>\n								</div>\n								<div class="input-field col s6">\n									<i class="mdi-communication-email prefix"></i>\n									<input id="icon_email" required="" type="email" name="email" class="validate">\n									<label style="color: #9e9e9e !important;" for="icon_email">Person\'s E-mail</label>\n								</div>\n							</div>'), "\n							", HTML.DIV({
    "class": "row"
  }, "\n								", HTML.DIV({
    "class": "input-field col s12"
  }, "\n									", HTML.TEXTAREA({
    id: "textarea1",
    required: "",
    pattern: ".{10,}",
    title: "10 characters minimum",
    "class": "materialize-textarea"
  }), "\n									", HTML.Raw('<label style="color: #9e9e9e !important;" for="textarea1">Your Message to this Person</label>'), "\n								"), "\n								", HTML.Raw('<div id="spinner" class="row center hide">\n									<div class="preloader-wrapper big active">\n										<div class="spinner-layer spinner-blue">\n											<div class="circle-clipper left">\n												<div class="circle"></div>\n											</div><div class="gap-patch">\n											<div class="circle"></div>\n										</div><div class="circle-clipper right">\n											<div class="circle"></div>\n										</div>\n										</div>\n\n										<div class="spinner-layer spinner-red">\n											<div class="circle-clipper left">\n												<div class="circle"></div>\n											</div><div class="gap-patch">\n											<div class="circle"></div>\n										</div><div class="circle-clipper right">\n											<div class="circle"></div>\n										</div>\n										</div>\n\n										<div class="spinner-layer spinner-yellow">\n											<div class="circle-clipper left">\n												<div class="circle"></div>\n											</div><div class="gap-patch">\n											<div class="circle"></div>\n										</div><div class="circle-clipper right">\n											<div class="circle"></div>\n										</div>\n										</div>\n\n										<div class="spinner-layer spinner-green">\n											<div class="circle-clipper left">\n												<div class="circle"></div>\n											</div><div class="gap-patch">\n											<div class="circle"></div>\n										</div><div class="circle-clipper right">\n											<div class="circle"></div>\n										</div>\n										</div>\n									</div>\n								</div>'), "\n								", HTML.Raw('<div id="message" class="row hide">\n									<h6 class="center">Message send. Thank you :)</h6>\n								</div>'), "\n								", HTML.Raw('<div id="message1" class="row hide">\n									<h6 class="center">Please fill in all the fields!</h6>\n								</div>'), "\n							"), "\n							", HTML.Raw('<div id="inputs2" class="row">\n								<button type="submit" id="submit" style="float:right" class="btn waves-effect waves-light green">\n                  <span>Submit</span>\n									<i class="mdi-content-send right"></i>\n								</button>\n							</div>'), "\n						"), "\n					"), "\n				"), "\n			"), "\n			", HTML.Raw('<div class="row"></div>'), "\n\n		"), "\n	"), "\n	", HTML.SCRIPT("\n		(function($){\n			$(function(){\n\n				$('.button-collapse').sideNav();\n				$('.parallax').parallax();\n				$('.modal-trigger').leanModal();\n\n			}); // end of document ready\n		})(jQuery)\n	") ];
}));

})();
