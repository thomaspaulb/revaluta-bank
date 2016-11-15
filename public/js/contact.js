(function(){
Template.contact.events({
	'click #submit': function(){
		$('#inputs1').addClass('hide');
		$('#inputs2').addClass('hide');
		$('#spinner').removeClass('hide');
		$('#submit').addClass('disabled');
		var email = $('#icon_prefix').val();
		var telephone = $('#icon_telephone').val();
		var message = $('#textarea1').val();
		var subject = "Revaluta contact: " + email + " " + telephone;
		if(email!==null && email!==undefined && message.length>10){
			Meteor.call('sendMail','charif@outlook.com','no-reply@bank.complementarycurrency.info',subject,message,function(error,results){
				$('#submit').addClass('hide');
				$('#spinner').addClass('hide');
				$('#message').removeClass('hide');
			});
		}
		else{
			Meteor.setTimeout(function(){
				$('#submit').removeClass('disabled');
			},1000)
		}
	}
});

})();
