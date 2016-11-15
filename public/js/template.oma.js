(function(){
Template.__checkName("oma");
Template["oma"] = new Template("Template.oma", (function() {
  var view = this;
  return [ HTML.Raw('<div id="index-banner" class="parallax-container valign-wrapper">\n			<div class="section no-pad-bot valign">\n				<div class="container center">\n					<br><br>\n					<div class="row center">\n						<div class="darkened-centered-box large-font">\n							<img style="display: inline-block;" class="circle" src="Revoluta-one-man-army.png">\n							<div style="display: block;">One Man Army</div>\n						</div>\n					</div>\n					<div class="row center">\n						<div class="darkened-centered-box medium-font">\n							<span>To feel abundant forever</span>\n						</div>\n					</div>\n				</div>\n			</div>\n			<div class="parallax"><img src="oma3d.jpg" alt="Unsplashed background img 2"></div>\n		</div>\n\n		'), HTML.DIV({
    id: "revaluta",
    "class": "container"
  }, "\n			", HTML.DIV({
    "class": "section"
  }, "\n				", HTML.Raw('<div class="row">\n					<h5 class="center">One Man Armies</h5>\n				</div>'), "\n				", HTML.DIV({
    "class": "row"
  }, "\n					", HTML.DIV({
    "class": "col s12 offset-m3 m6"
  }, "\n						", HTML.UL({
    "class": "collection"
  }, "\n                            ", Blaze.Each(function() {
    return Spacebars.call(view.lookup("clubbers"));
  }, function() {
    return [ "\n								", HTML.LI({
      "class": "collection-item avatar"
    }, "\n									", HTML.I({
      "class": "mdi-action-accessibility circle"
    }), "\n									", HTML.SPAN({
      "class": "title"
    }, Blaze.View("lookup:name", function() {
      return Spacebars.mustache(view.lookup("name"));
    })), "\n									", HTML.P("#", Blaze.View("lookup:number", function() {
      return Spacebars.mustache(view.lookup("number"));
    })), "\n									", HTML.A({
      "class": "secondary-content"
    }, HTML.I({
      "class": "mdi-action-grade"
    })), "\n								"), "\n                            " ];
  }), "\n						"), "\n					"), "\n				"), "\n				", HTML.Raw('<div class="row"></div>'), "\n			"), "\n		"), "\n		", HTML.SCRIPT("\n			(function($){\n				$(function(){\n\n					$('.button-collapse').sideNav();\n					$('.parallax').parallax();\n					$('.modal-trigger').leanModal();\n\n				}); // end of document ready\n			})(jQuery)\n		") ];
}));

})();
