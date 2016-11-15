(function(){
Template.__checkName("walHistory");
Template["walHistory"] = new Template("Template.walHistory", (function() {
  var view = this;
  return [ HTML.Raw('<div id="index-banner" class="parallax-container valign-wrapper">\n			<div class="section no-pad-bot valign">\n				<div class="container center">\n					<div class="row center">\n						<div class="darkened-centered-box large-font">\n							<img style="display: inline-block;" class="circle" src="Revoluta-one-worthalot.png">\n							<div style="display: block;">Worthalot</div>\n						</div>\n					</div>\n					<div class="row center">\n						<div class="darkened-centered-box medium-font">\n							<span>To validate someone valuable</span>\n						</div>\n					</div>\n				</div>\n			</div>\n			<div class="parallax"><img src="ow3d.jpg" alt="Unsplashed background img 2"></div>\n		</div>\n\n		'), HTML.DIV({
    id: "revaluta",
    "class": "container"
  }, "\n			", HTML.DIV({
    "class": "section"
  }, "\n				", HTML.Raw('<div class="row">\n					<h5 class="center">Worthalot</h5>\n				</div>'), "\n				", HTML.DIV({
    "class": "row"
  }, "\n					", HTML.DIV({
    "class": "col s12 offset-m2 m8"
  }, "\n						", Blaze.Each(function() {
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
    }), ")"), "\n							"), "\n						"), "\n						" ];
  }), "\n					"), "\n				"), "\n				", HTML.DIV({
    "class": "row"
  }, "\n					", HTML.DIV({
    "class": "col s12 offset-m2 m8"
  }, "\n						", HTML.Raw('<h4 class="center">\n							History\n						</h4>'), "\n						", HTML.UL({
    "class": "collection"
  }, "\n                            ", Blaze.Each(function() {
    return Spacebars.call(view.lookup("historyNote"));
  }, function() {
    return [ "\n							", HTML.LI({
      "class": "collection-item avatar"
    }, "\n								", HTML.P(Blaze.View("lookup:dateExchange", function() {
      return Spacebars.mustache(view.lookup("dateExchange"));
    })), "\n								", HTML.SPAN("From ", Blaze.View("lookup:giver", function() {
      return Spacebars.mustache(view.lookup("giver"));
    }), " to ", Blaze.View("lookup:receiver", function() {
      return Spacebars.mustache(view.lookup("receiver"));
    }), " "), "\n								", HTML.P(Blaze.View("lookup:message", function() {
      return Spacebars.mustache(view.lookup("message"));
    })), "\n							"), "\n                            " ];
  }), "\n						"), "\n					"), "\n				"), "\n				", HTML.Raw('<div class="row"></div>'), "\n\n			"), "\n		"), "\n		", HTML.SCRIPT("\n			(function($){\n				$(function(){\n\n					$('.button-collapse').sideNav();\n					$('.parallax').parallax();\n					$('.modal-trigger').leanModal();\n\n				}); // end of document ready\n			})(jQuery)\n		") ];
}));

})();
