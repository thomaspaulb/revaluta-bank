(function(){
Template.__checkName("nav");
Template["nav"] = new Template("Template.nav", (function() {
  var view = this;
  return [ HTML.Raw('<nav class="white" role="navigation">\n		<div class="nav-wrapper container">\n			<a id="logo-container" href="/" class="brand-logo"><img style="margin-top: 0.1em" height="50px" src="revaluta-header-full.jpg" alt=""></a>\n			<ul id="dropdown1" class="dropdown-content">\n			  <li><a href="#!">one</a></li>\n				<li><a href="#!">two</a></li>\n				<li class="divider"></li>\n				<li><a href="#!">three</a></li>\n			</ul>\n			<ul class="right hide-on-med-and-down">\n			  <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Currency types<i class="mdi-navigation-arrow-drop-down right"></i></a></li>\n				<li><a href="/info">Info</a></li>\n				<li><a href="/shop">Get/Give Shop</a></li>\n				<li><a href="/contact">Contact</a></li>\n			</ul>\n\n			<ul id="nav-mobile" class="side-nav">\n				<li><a href="/info">Info</a></li>\n				<li><a href="/shop">Get/Give Shop</a></li>\n				<li><a href="/contact">Contact</a></li>\n			</ul>\n			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>\n		</div>\n	</nav>\n	'), Spacebars.include(view.lookupTemplate("yield")), HTML.Raw('\n 	<div class="row"></div>\n	<footer style="position: fixed;bottom: 0;width: 100%;z-index: 20" class="page-footer green">\n		<div class="footer-copyright">\n			<div class="container" style="text-align: center">\n				Revaluta Bank of Value Exchanges © 2015\n			</div>\n		</div>\n	</footer>') ];
}));

})();
