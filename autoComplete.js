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
$( "#tags1" ).autocomplete({
	source: availableTags
	});
});