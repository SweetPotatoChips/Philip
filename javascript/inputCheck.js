//this file contains the inputCheck(), this function will compare what the user has submitted with an array that contains valid location. if they have entered values that are not in the array or they have enterd the same start and end destination then false will be returned and the form will not be submitted to the database.
function inputCheck() {
	var inputStart = document.forms['myForm']['startLoc'].value;//gets the users start locations
	var inputEnd = document.forms['myForm']['endLoc'].value;//gets the users end locations
	var cities = ["Warwick","Leamington Spa","London","Birmingham","Leeds","Glasgow","Sheffield","Bradford","Edinburgh","Liverpool","Manchester","Bristol","Wakefield","Cardiff","Coventry","Nottingham","Leicester","Sunderland","Belfast","Newcastle upon Tyne","Brighton","Hull","Plymouth","Stoke-on-Trent","Wolverhampton","Derby","Swansea","Southampton","Salford","Aberdeen","Westminster","Portsmouth","York","Peterborough","Dundee","Lancaster","Oxford","Newport","Preston","St Albans","Norwich","Chester","Cambridge","Salisbury","Exeter","Gloucester","Lisburn","Chichester","Winchester","Londonderry","Carlisle","Worcester","Bath","Durham","Lincoln","Hereford","Armagh","Inverness","Stirling","Canterbury","Lichfield","Newry","Ripon","Bangor","Truro","Ely","Wells","St Davids"]; //this is the array of valid locations 
	var value1 = false; //sets the default value for the start location check to false
	var value2 = false; //sets the default value for the end location check to false
	for (var i = 0; i < cities.length; i++) //loops through the array
	{
		if (inputStart == cities[i])//if the users start location is equal to the current selected value from the array
		{
			var value1 = true;//sets the start location check value to true
		} 
		else if (inputEnd == cities[i])//if the users end location is equal to the current selected value from the array
		{
			var value2 = true;//sets the end location check value to true
		}
	}
	if (inputStart == inputEnd)//if the user has entered the same start and end locations
	{
		document.getElementById("error").innerHTML = '<div class="alert alert-danger" style="display: inline-block;margin-left: 13px;"> You can start and end in the same location.</div>'//returns an error message saying the user cant enter the same start and end value
		return false;//returns false to stop the form being submitted to the database
	}
	if (value1 == false || value2 == false) //if the start or end location has not been found in the array it will do the following
	{	
		document.getElementById("error").innerHTML = '<div class="alert alert-danger" style="display: inline-block;margin-left: 13px;"> Invalid location try again.</div>'//returns an error message saying the user has not entered a valid location
		return false;//returns false so the form is not submitted to the database
	}
	else//if no problems are found with the data the user has entered it does the following
	{
		return true;//returns true allowing the form to be submitted to the database
	}
}