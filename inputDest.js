$(document).ready(function(){
	$('#inputDest.typeahead').typeahead({
		highlight:true
		name: 'destinations',
		local:[	"Warwick","Leamington Spa","Whitnash","Leamington Hastings","Coventry","Birminham","London","Liverpool"]
	});
});

