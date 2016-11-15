(function(){Template.walHistory.onCreated(function () {
  this.subscribe("wal", function() {
    var number = parseInt(Session.get('History'));
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

Template.walHistory.helpers({
	history: function(){
		var number = parseInt(Session.get('History'));
		var obj = Wal.findOne({number:number});
		var history = [];
		var part = {};
		part["receiver"] = obj.receiver[obj.receiver.length-1];
		part["message"] = obj.message[obj.receiver.length-1];
		part["giver"] = obj.giver[obj.receiver.length-1];
		part["dateExchange"] = obj.dateExchange[obj.receiver.length-1];
		history.push(part);
		return history;
	},
	historyNote: function () {
		var number = parseInt(Session.get('History'));
		var obj = Wal.findOne({number:number});
		var history = [];
		for (var i = obj.receiver.length-2; i >= 0; i--){
			var part = {};
			part["receiver"] = obj.receiver[i];
			part["message"] = obj.message[i];
			part["giver"] = obj.giver[i];
			part["dateExchange"] = obj.dateExchange[i];
			history.push(part);
		}
		return history;
	}
});

})();
