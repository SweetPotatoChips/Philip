$(function() {
	var availableTags = [
	"Warwick",
	"Leamington Spa",
	"Whitnash",
	"Leamington Hastings",
	"Coventry",
	"Birminham",
	"London",
	"Liverpool"
	];
$( "#tags2" ).autocomplete({
	source: availableTags
	});
});
