(function(){Template.wal.onCreated(function () {
  this.subscribe("wal");
});

Template.wal.helpers({
	wals: function(){
		var query = Wal.find({},{sort: {transactionNumber: -1},limit:5});
		return query;
	}
});

})();
