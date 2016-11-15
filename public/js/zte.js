(function(){/**
 * Created by charifmews on 27/05/15.
 */
Template.zte.events({

});

Template.zte.helpers({
	clubbers: function () {
		return Zte.find({},{sort: {transactionNumber: -1},limit:25});
	}
});

})();
