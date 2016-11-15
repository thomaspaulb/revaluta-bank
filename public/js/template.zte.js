(function(){
Template.__checkName("zte");
Template["zte"] = new Template("Template.zte", (function() {
  var view = this;
  return [ HTML.Raw('<div id="index-banner" class="parallax-container valign-wrapper">\n    <div class="section no-pad-bot valign">\n      <div class="container center">\n        <br><br>\n        <div class="row center">\n          <div class="darkened-centered-box large-font">\n            <img style="display: inline-block;" class="circle" src="Revoluta-zero-trillion-euro.png">\n            <div style="display: block;">Zero trillion euro</div>\n          </div>\n        </div>\n        <div class="row center">\n          <div class="darkened-centered-box medium-font">\n            <span>To feel abundant forever</span>\n          </div>\n        </div>\n      </div>\n    </div>\n    <div class="parallax"><img src="zte3d.jpg" alt="Unsplashed background img 2"></div>\n  </div>\n\n	'), HTML.DIV({
    id: "revaluta",
    "class": "container"
  }, "\n		", HTML.DIV({
    "class": "section"
  }, "\n            ", HTML.Raw('<div class="row">\n                <h5 class="center">Zero Trillion Club</h5>\n            </div>'), "\n			", HTML.DIV({
    "class": "row"
  }, "\n				", HTML.DIV({
    "class": "col s12 offset-m3 m6"
  }, "\n					", HTML.UL({
    "class": ""
  }, "\n						", Blaze.Each(function() {
    return Spacebars.call(view.lookup("clubbers"));
  }, function() {
    return [ "\n							", HTML.LI({
      style: "margin:0 0 0 0 !important",
      "class": "card s12 m12 yellowZte zteLi"
    }, "\n								", HTML.DIV({
      "class": "lightZte"
    }, "\n                                    ", HTML.I({
      "class": "mdi-action-accessibility circle"
    }), "\n                                    ", HTML.SPAN({
      "class": "title"
    }, Blaze.View("lookup:name", function() {
      return Spacebars.mustache(view.lookup("name"));
    })), "\n                                    ", HTML.P("#", Blaze.View("lookup:number", function() {
      return Spacebars.mustache(view.lookup("number"));
    })), "\n								"), "\n							"), "\n						" ];
  }), "\n					"), "\n                "), "\n			"), "\n			", HTML.Raw('<div class="row"></div>'), "\n        "), "\n    "), "\n	", HTML.SCRIPT("\n		(function($){\n			$(function(){\n\n				$('.button-collapse').sideNav();\n				$('.parallax').parallax();\n				$('.modal-trigger').leanModal();\n\n			}); // end of document ready\n		})(jQuery)\n	") ];
}));

})();
