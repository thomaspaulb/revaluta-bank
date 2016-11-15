(function(){Template.shop.helpers({
	news: function () {
		return"";
	}
});

Template.shop.events({
	'click #submit': function(){
		$('#rij1').addClass('hide');
		$('#rij2').addClass('hide');
		$('#rij3').addClass('hide');
		$('#rij4').addClass('hide');
		$('#rij5').addClass('hide');
		$('#rij6').addClass('hide');
		$('.divider').addClass('hide');
		$('#spinner').removeClass('hide');
		$('#submit').addClass('disabled');
		var name = $('#icon_prefix').val();
		var telephone = $('#icon_telephone').val();
		var address = $('#icon_address').val();
		var city = $('#icon_city').val();
		var country = $('#icon_country').val();
		var email = $('#icon_email').val();
		var message = 'Motivation: ' + $('#textarea1').val() + '\n'+ 'I would like to give Revaluta: ' + $('#optie1').is(':checked') +'\n'+ 'I would like to get Revaluta: ' + $('#optie2').is(':checked') +'\n'+ 'I would like to start my Revaluta Bank: ' + $('#optie3').is(':checked') +'\n'+ 'Standard package: ' + $('#optie4').is(':checked') +'\n'+ 'Custom package: ' + $('#optie5').is(':checked') +'\n\n' + 'The address is: \n' + address+' '+ city +'\n' + country + '\n'  ;
		if($('#optie5').is(':checked')){
			var extra = $('#textarea2').val();
			message +=  'Request: ' + extra;
		}
		console.log('gebeurt');
		var subject = "Revaluta Shop Request: "+name + " " + email + " " + telephone;
		if(email && name && message.length>10){
			Meteor.call('sendMail','charif@outlook.com','no-reply@bank.complementarycurrency.info',subject,message,function(error,results){
				$('#submit').addClass('hide');
				$('#spinner').addClass('hide');
				$('#message').removeClass('hide');
			});
		}
		else{
			console.log('nope');
			Meteor.setTimeout(function(){
				$('#rij1').removeClass('hide');
				$('#rij2').removeClass('hide');
				$('#rij3').removeClass('hide');
				$('#rij4').removeClass('hide');
				$('#rij5').removeClass('hide');
				$('#rij6').removeClass('hide');
				$('.divider').removeClass('hide');
				$('#spinner').addClass('hide');
				$('#submit').removeClass('disabled');
			},1000)
		}
	},
	'click #optie5': function () {
		if($('#optie5').is(':checked')){
			$('#Custom').removeClass('hide');
			}else{
			$('#Custom').addClass('hide');
		}
	}
});

})();
