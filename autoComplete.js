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
$( "#tags" ).autocomplete({
	source: availableTags
	});
});