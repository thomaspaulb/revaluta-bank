(function(){Template.walUpdate.onCreated(function () {
  this.subscribe("wal", function() {
		var number = parseInt(Session.get('Update'));
		if(!Wal.findOne({number:number})){
			sweetAlert(
        {
					title: "Cannot find this note number", 
					text: "You will be redirected to the main site", 
					type: "error",
				},
				function() {
					Router.go("/");
				}
			);
		}
  });
});

Template.walUpdate.events({
	'submit form': function(event){
    event.preventDefault();
		$('.input-field').addClass('hide');
		$('#spinner').removeClass('hide');
		$('#submit').addClass('disabled');
		var number = parseInt(Session.get('Update'));
		var receiver = $('#icon_prefix').val();
		var receiverMail = $('#icon_email').val();
		var message = $('#textarea1').val();
		var obj = Wal.findOne({number:number});
		var newGiver = obj.receiver[obj.receiver.length-1];
		var subject = "Special message from " + newGiver ;
		var messageMail = "This person would like you to show how special you are and just gave you a worthalot note. " + "\n" + "Click on this link to see the message and send it to the next person you think is worth a lot:" + '\n' + "www.revaluta.cc/walUpdate/" + number ;

    // validations
		// Meteor.setTimeout(function(){
		// 	$('.input-field').removeClass('hide');
		// 	$('#spinner').addClass('hide');
		// 	$('#submit').removeClass('disabled');
		// },1000)

		Meteor.call("wal",number,receiver,receiverMail,message,function(err,res){
			if(err){
				sweetAlert("Oops... Something is wrong", "Please check your values again", "error");
				$('.input-field').removeClass('hide');
				$('#spinner').addClass('hide');
				$('#submit').removeClass('disabled');
			}else{
				Meteor.call('sendMail',receiverMail,'no-reply@bank.complementarycurrency.info',
            subject,messageMail,function(error,results){});
				sweetAlert(
					{
						title: "Note successfully given!", 
						text: "Email has been sent to receiver. You will be taken to the main site.", 
						type: "success",
					},
					function() {
						Router.go("/wal");
				    Session.set("Update",null);
					}
				);
      }  
		});
	}
});

Template.walUpdate.helpers({
	history: function(){
		var number = parseInt(Session.get('Update'));
		var obj = Wal.findOne({number:number});
		var history = [];
		var part = {};
		part["receiver"] = obj.receiver[obj.receiver.length-1];
		part["message"] = obj.message[obj.receiver.length-1];
		part["giver"] = obj.giver[obj.receiver.length-1];
		part["dateExchange"] = obj.dateExchange[obj.receiver.length-1];
		history.push(part);
		return history;
	}
});

})();
