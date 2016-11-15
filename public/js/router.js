(function(){Router.plugin('dataNotFound', {notFoundTemplate: 'notFound'});
Router.configure({
	layoutTemplate: 'nav'
});
Router.map(function () {
	this.route('/', {
		action: function () {
			this.render('frontpage');
		}
	});
	this.route('/info', {
		action: function () {
			this.render('info');
		}
	});
	this.route('/shop', {
		action: function () {
			this.render('shop');
		}
	});
	this.route('/contact', {
		action: function () {
			this.render('contact');
		}
	});
	//Worth a lot
	this.route('/wal', {
		action: function () {
			this.render('wal')
		}
	});
	this.route('/walHistory/:id', {
		action: function () {
			var params = this.params;
			var id = params.id;
			Session.set('History', id);
			this.render('walHistory', {
				data: function () {
					return Wal.findOne({_id: id});
				}
			});
		}
	});
	this.route('/wal/:id', {
		action: function () {
			var params = this.params;
			var id = params.id;
			if(Session.get('Invoer')!=id){
				Router.go('/')
			}else{
				this.render('walInput');
			}
		}
	});
	this.route('/walUpdate/:id',{
		action: function() {
			var params = this.params;
			var id = params.id;
			Session.set('Update',id);
			this.render('walUpdate');
		}
	});

	//Zero trillion
	this.route('/zte', {
		action: function () {
			this.render('zte')
		}
	});
	this.route('/zte/:id', {
		action: function () {
			var params = this.params;
			var id = params.id;
			if(Session.get('Invoer')!=id){
				Router.go('/')
			}
			this.render('zteInput', {
				data: function () {
					return Zte.findOne({_id: this.params.id});
				}
			});
		}
	});

	//nulro
	this.route('/nul', {
		action: function () {
			this.render('nul')
		}
	});
	this.route('/nul/:id', {
		action: function () {
			var params = this.params;
			var id = params.id;
			this.render('nulInput');
		}
	});
	//One percent
	this.route('/op', {
		action: function () {
			this.render('op')
		}
	});
	this.route('/op/:id', {
		action: function () {
			var params = this.params;
			var id = params.id;
			if(Session.get('Invoer')!=id){
				Router.go('/')
			}
			this.render('opInput', {
				data: function () {
					return Op.findOne({_id: this.params._id});
				}
			});
		}
	});
	//One man Army
	this.route('/oma', {
		action: function () {
			this.render('oma')
		}
	});
	this.route('/oma/:id', {
		action: function () {
			var params = this.params;
			var id = params._id;
		}
	});
});

})();
