(function(){Template.frontpage.events({
	'submit form': function(event){
    event.preventDefault();
		var nummer = Number($('#icon_prefix').val()),exist =false;
		check(nummer,Number);
		Session.setPersistent('Invoer',nummer);
		if(Wal.findOne({number:nummer})){
			exist = true;
		}
		if(Zte.findOne({number:nummer})){
			exist = true;
		}
		if(Nul.findOne({number:nummer})){
			exist = true;
		}
		if(Op.findOne({number:nummer})){
			exist = true;
		}
		if(Oma.findOne({number:nummer})){
			exist = true;
		}
		//NUL
		if(nummer>=100000&&nummer<=101750&&!exist){
			swal("Not available yet!", "This note will soon be available");
			//var url = '/nul/' +nummer;
			//Router.go(url);
		}
		//OP (one percent)
		else if(nummer>=200000&&nummer<=201750&&!exist){
			swal("Not available yet!", "This note will soon be available");
		}
		//WAL
		else if(nummer>=300000&&nummer<=301750&&!exist){
			var url = '/wal/' +nummer;
			Router.go(url);
		}
		//OMA
		else if(nummer>=400000&&nummer<=401750&&!exist){
			swal("Not available yet!", "This note will soon be available");
			//var url = '/oma/' +nummer;
			//Router.go(url);
		}
		//ZTE
		else if(nummer>=500000&&nummer<=501750&&!exist){
			var url = '/zte/' +nummer;
			Router.go(url);
			//var url = '/oma/' +nummer;
			//Router.go(url);
		}
		else{
			$('#message').removeClass('hide');
			Meteor.setTimeout(function(){
				$('#message').addClass('hide');
			},4000)
		}

	}
});

})();
