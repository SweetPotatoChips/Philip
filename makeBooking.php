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
			<div class="alert alert-info" style="display: inline-block;margin-left: 13px;">
				Please enter your desired start and end locations below
			</div>
			
			<br>

			<script src="javascript\inputCheck.js"></script>
			<script src="javascript\autoComplete.js"></script>

			<form  name="myForm" action="submitBooking.php" onsubmit="return inputCheck()" method="post">

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
			
			<strong><p id="error"></p></strong>

			</div>
	</body>
</html> 
