function inputCheck() {
	var inputStart = document.forms['myForm']['startLoc'].value;
	var inputEnd = document.forms['myForm']['endLoc'].value;
	var cities = ["Warwick","Leamington Spa","London","Birmingham","Leeds","Glasgow","Sheffield","Bradford","Edinburgh","Liverpool","Manchester","Bristol","Wakefield","Cardiff","Coventry","Nottingham","Leicester","Sunderland","Belfast","Newcastle upon Tyne","Brighton","Hull","Plymouth","Stoke-on-Trent","Wolverhampton","Derby","Swansea","Southampton","Salford","Aberdeen","Westminster","Portsmouth","York","Peterborough","Dundee","Lancaster","Oxford","Newport","Preston","St Albans","Norwich","Chester","Cambridge","Salisbury","Exeter","Gloucester","Lisburn","Chichester","Winchester","Londonderry","Carlisle","Worcester","Bath","Durham","Lincoln","Hereford","Armagh","Inverness","Stirling","Canterbury","Lichfield","Newry","Ripon","Bangor","Truro","Ely","Wells","St Davids"];
	var value1 = "false";
	var value2 = "false";
	for (var i = 0; i < cities.length; i++) 
	{
		if (inputStart == cities[i])
		{
			var value1 = "true";
		} 
		else if (inputEnd == cities[i])
		{
			var value2 = "true";
		}
	}
	if (value1 == "false" || value2 == "false")
	{	
		document.getElementById("error").innerHTML = '<div class="alert alert-danger" style="display: inline-block;margin-left: 13px;"> Invalid destination try again.</div>'
		return false;
	}
	else
	{
		return true;
	}
}