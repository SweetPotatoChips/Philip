$(function() {
		var cities = ["Warwick","Leamington Spa","London","Birmingham","Leeds","Glasgow","Sheffield","Bradford","Edinburgh","Liverpool","Manchester","Bristol","Wakefield","Cardiff","Coventry","Nottingham","Leicester","Sunderland","Belfast","Newcastle upon Tyne","Brighton","Hull","Plymouth","Stoke-on-Trent","Wolverhampton","Derby","Swansea","Southampton","Salford","Aberdeen","Westminster","Portsmouth","York","Peterborough","Dundee","Lancaster","Oxford","Newport","Preston","St Albans","Norwich","Chester","Cambridge","Salisbury","Exeter","Gloucester","Lisburn","Chichester","Winchester","Londonderry","Carlisle","Worcester","Bath","Durham","Lincoln","Hereford","Armagh","Inverness","Stirling","Canterbury","Lichfield","Newry","Ripon","Bangor","Truro","Ely","Wells","St Davids"];
$( "#tags1, #tags2" ).autocomplete({
	source: cities
	});
});