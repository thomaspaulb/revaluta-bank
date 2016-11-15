(function(){Template.opInput.events({
	'click #submit': function(){
		$('#inputs1').addClass('hide');
		$('#inputs2').addClass('hide');
		$('#spinner').removeClass('hide');
		$('#submit').addClass('disabled');
		var name1 = $('#icon_prefix').val();
		var email1 = $('#icon_email').val();
		console.log('gebeurt1');
		if(name1.length>=2 && email1.length>5){
			var nummer = Session.get("Invoer");
			Op.insert({number:nummer,name:name1,email:email1,exist:true});
			$('#spinner').addClass('hide');
			Router.go("/zte");
			Session.set("Invoer",null);
		}
		else{
			Meteor.setTimeout(function(){
				$('#inputs1').removeClass('hide');
				$('#inputs2').removeClass('hide');
				$('#submit').removeClass('disabled');
				$('#spinner').addClass('hide');

			},1000)
		}
	}
});

Template.opInput.helpers({

});

})();
