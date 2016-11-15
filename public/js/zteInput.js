(function(){/**
 * Created by charifmews on 27/05/15.
 */
Template.zteInput.events({
	'click #submit': function(){
		$('#inputs1').addClass('hide');
		$('#inputs2').addClass('hide');
		$('#spinner').removeClass('hide');
		$('#submit').addClass('disabled');
		var name1 = $('#icon_prefix').val();
		var email1 = $('#icon_email').val();
		var transactionNumber = Zte.find().count();
		var messageMail = "Dear "+ name1 + '\n' +"Be part of the Zero Trillion Euro Community! Join us:" + '\n' + "https://www.facebook.com/pages/Zero-Trillion-Euro-Club/1665885713637861?fref=ts";
		if(name1.length>=2 && email1.length>5){
			var nummer = Session.get("Invoer");
			Zte.insert({number:nummer,name:name1,email:email1,transactionNumber:transactionNumber,exist:true});
			Meteor.call('sendMail',email1,'no-reply@bank.complementarycurrency.info',"Zero Trillion Euro Club",messageMail,function(error,results){
				$('#submit').addClass('hide');
				$('#spinner').addClass('hide');
				$('#message').removeClass('hide');
			});
			$('#spinner').addClass('hide');
			Router.go("/zte");
			Session.set("Invoer",null);
		}
		else{
			Meteor.setTimeout(function(){
				$('#inputs1').removeClass('hide');
				$('#inputs2').removeClass('hide');
				$('#spinner').addClass('hide');
				$('#submit').removeClass('disabled');
			},1000)
		}
	}
});

Template.zteInput.helpers({

});

})();
