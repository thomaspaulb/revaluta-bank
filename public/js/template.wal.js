(function(){
Template.__checkName("wal");
Template["wal"] = new Template("Template.wal", (function() {
  var view = this;
  return [ HTML.Raw('<div id="index-banner" class="parallax-container valign-wrapper">\n    <div class="section no-pad-bot valign">\n      <div class="container center">\n        <div class="row center">\n          <div class="darkened-centered-box large-font">\n            <img style="display: inline-block;" class="circle" src="Revoluta-one-worthalot.png">\n            <div style="display: block;">Worthalot</div>\n          </div>\n        </div>\n        <div class="row center">\n          <div class="darkened-centered-box medium-font">\n            <span>To validate someone valuable</span>\n          </div>\n        </div>\n      </div>\n    </div>\n    <div class="parallax"><img src="ow3d.jpg" alt="Unsplashed background img 2"></div>\n  </div>\n\n  '), HTML.DIV({
    id: "revaluta",
    "class": "container"
  }, "\n    ", HTML.DIV({
    "class": "section"
  }, "\n      ", HTML.Raw('<div class="row">\n        <h5 class="center">Last Issued Worthalots</h5>\n      </div>'), "\n      ", HTML.DIV({
    "class": "row"
  }, "\n          ", Blaze.Each(function() {
    return Spacebars.call(view.lookup("wals"));
  }, function() {
    return [ "\n        ", HTML.DIV({
      "class": "col s12 offset-m2 m8"
    }, "\n	        ", HTML.DIV({
      "class": "card green"
    }, "\n            ", HTML.A({
      href: function() {
        return [ "walHistory/", Spacebars.mustache(view.lookup("number")) ];
      }
    }, "\n            ", HTML.DIV({
      "class": "card-content white-text"
    }, "\n              ", HTML.SPAN("Dear ", Blaze.View("lookup:receiv", function() {
      return Spacebars.mustache(view.lookup("receiv"));
    }), ","), "\n              ", HTML.P({
      "class": "card-title"
    }, Blaze.View("lookup:mes", function() {
      return Spacebars.mustache(view.lookup("mes"));
    })), "\n            "), "\n	        "), "\n\n	        ", HTML.DIV({
      "class": "card-action"
    }, "\n              ", HTML.P("From: ", Blaze.View("lookup:giv", function() {
      return Spacebars.mustache(view.lookup("giv"));
    }), " (", Blaze.View("lookup:date", function() {
      return Spacebars.mustache(view.lookup("date"));
    }), ")"), "\n            "), "\n          "), "\n        "), "\n          " ];
  }), "\n      "), HTML.Raw('<div class="row"></div>'), "\n\n\n    "), "\n  "), "\n  ", HTML.SCRIPT("\n    (function($){\n      $(function(){\n\n        $('.button-collapse').sideNav();\n        $('.parallax').parallax();\n        $('.modal-trigger').leanModal();\n\n      }); // end of document ready\n    })(jQuery)\n  ") ];
}));

})();
