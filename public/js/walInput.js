(function(){Template.walInput.events({
	'submit form': function(event){
    event.preventDefault();
		$('#inputs1').addClass('hide');
		$('#inputs2').addClass('hide');
		$('#spinner').removeClass('hide');
		$('#submit').addClass('disabled');

		var receiver = $('#icon_prefix').val();
		var receiverMail = $('#icon_email').val();
		var message = $('#icon_message').val();
		var giver = $('#icon_name').val();
		var giverEmail = $('icon_email1').val();
		var dateExchange = new Date().toLocaleString();
		var transactionNumber = Wal.find().count();
		var subject = "Special message from " + giver ;
		var nummer = Session.get("Invoer");
		var messageMail = "This person would like you to show how special you are and just gave you a worthalot note. " + "\n" + "Click on this link to see the message and send it to the next person you think is worth a lot:" + '\n' + "www.revaluta.cc/walUpdate/" + nummer ;

    // form validation

		if(receiver.length>=2 && receiverMail.length>5 && message.length>5){
			Wal.insert({number:nummer,date:dateExchange,dateExchange:[dateExchange],receiv:receiver,receiver:[receiver],receiverMail:receiverMail,mes:message,message:[message],giv:giver,giver:[giver],giverEmail:[giverEmail],transactionNumber:[transactionNumber],exist:true});
			Meteor.call('sendMail',receiverMail,'no-reply@bank.complementarycurrency.info',subject,messageMail,function(error,results){
				$('#submit').addClass('hide');
				$('#spinner').addClass('hide');
				$('#message').removeClass('hide');
			});
			$('#spinner').addClass('hide');
			sweetAlert(
				{
					title: "Note successfully given!",
					text: "Email has been sent to receiver. You will be taken to the main site.",
					type: "success",
				},
				function() {
					Router.go("/wal");
					Session.set("Invoer",null);
				}
			);
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

Template.walInput.helpers({

});

})();
