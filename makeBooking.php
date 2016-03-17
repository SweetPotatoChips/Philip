<!DOCTYPE html>
<html>
	<head>
		<title>Make Booking</title>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
			<?php 
			$a = "booking";
			include "includes\bootstrap.php";
			include "includes\header.php"; 
			?>

			<body>
			<h4>Please enter your desired start and end locations below</h4>
			<br>

			<script src="javascript\inputCheck"></script>
			<script src="javascript\autoComplete.js"></script>

			<form  name="myForm" action="submitBooking.php" onsubmit="return test()" method="post">

				<div class="col-xs-3">
					<input class="form-control" name="startLoc" id="tags1" placeholder="Start Location" autocomplete="off"  required>
				</div>

				<div class="col-xs-3">
					<input class="form-control" name="endLoc" id="tags2" placeholder="End Location" autocomplete="off" required>
				</div>

				<div class="col-xs-3">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>

			</form>

			<br><br><br>
			
			<p id="error"><strong></strong></p>

			<p id="test1"></p>
			<p id="test2"></p>

			</div>

			<script>
				function test() {
					var inputStart = document.forms['myForm']['startLoc'].value;
					var inputEnd = document.forms['myForm']['endLoc'].value;
					var cities = ["Warwick","Leamington Spa","London","Birmingham","Leeds","Glasgow","Sheffield","Bradford","Edinburgh","Liverpool","Manchester","Bristol","Wakefield","Cardiff","Coventry","Nottingham","Leicester","Sunderland","Belfast","Newcastle upon Tyne","Brighton","Hull","Plymouth","Stoke-on-Trent","Wolverhampton","Derby","Swansea","Southampton","Salford","Aberdeen","Westminster","Portsmouth","York","Peterborough","Dundee","Lancaster","Oxford","Newport","Preston","St Albans","Norwich","Chester","Cambridge","Salisbury","Exeter","Gloucester","Lisburn","Chichester","Winchester","Londonderry","Carlisle","Worcester","Bath","Durham","Lincoln","Hereford","Armagh","Inverness","Stirling","Canterbury","Lichfield","Newry","Ripon","Bangor","Truro","Ely","Wells","St Davids"];
						for (var i = 0; i < cities.length; i++) 
						{
							var value1 = "false";
							var value2 = "false";
							//document.getElementById("test").innerHTML = i;

							if (inputStart == cities[i])
							{
								var value1 = "true";
							} 
							else if (inputEnd == cities[i])
							{
								var value2 = "true";
							}
						}
						//document.getElementById("test").innerHTML = value1;
						//document.getElementById("test").innerHTML = value2;
						if (value1 == "true" && value2 == "true")
						{
							return true;
						}
						else
						{
							document.getElementById("error").innerHTML = '<div class="alert alert-danger" style="display: inline-block;margin-left: 13px;"> Invalid destination try again.</div>'
							return false;
						}
				}
			</script>
	</body>
</html> 
