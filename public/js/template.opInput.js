(function(){
Template.__checkName("opInput");
Template["opInput"] = new Template("Template.opInput", (function() {
  var view = this;
  return HTML.Raw('<div class="section">\n		<div class="row">\n			<div class="col s12 offset-m3 m6">\n				<div class="icon-block card">\n					<h5 class="center">Input One Percent Note</h5>\n					<form class="col s12">\n						<div id="inputs1" class="row">\n							<div class="input-field col s6">\n								<i class="mdi-action-account-circle prefix"></i>\n								<input id="icon_prefix" type="text" name="fullname" class="validate">\n								<label style="color: #9e9e9e !important;" for="icon_prefix">Name</label>\n							</div>\n							<div class="input-field col s6">\n								<i class="mdi-action-account-circle prefix"></i>\n								<input id="icon_email" type="email" name="email" class="validate">\n								<label style="color: #9e9e9e !important;" for="icon_prefix">E-mail</label>\n							</div>\n						</div>\n						<div id="spinner" class="row center hide">\n							<div class="preloader-wrapper big active">\n								<div class="spinner-layer spinner-blue">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n\n								<div class="spinner-layer spinner-red">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n\n								<div class="spinner-layer spinner-yellow">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n\n								<div class="spinner-layer spinner-green">\n									<div class="circle-clipper left">\n										<div class="circle"></div>\n									</div><div class="gap-patch">\n									<div class="circle"></div>\n								</div><div class="circle-clipper right">\n									<div class="circle"></div>\n								</div>\n								</div>\n							</div>\n						</div>\n						<div id="message" class="row hide">\n							<h6 class="center">Message send. Thank you :)</h6>\n						</div>\n						<div id="message1" class="row hide">\n							<h6 class="center">Please fill in all the fields!</h6>\n						</div>\n						<div id="inputs2" class="row">\n							<a id="submit" class="btn waves-effect waves-light green">Submit\n								<i class="mdi-content-send right"></i>\n							</a>\n						</div>\n					</form>\n				</div>\n			</div>\n		</div>\n	</div>');
}));

})();