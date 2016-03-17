<!DOCTYPE html>
<html>
	<head>
		<title>Make Booking</title>
		<?php
			include "includes\bootstrap.php";
		?>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
			<?php
				$a="booking";
				include "includes\header.php"; 
			?>
			<body>
			<br>
			<h4>Please your desired start and end location below</h4>
			<br>
			<form action="submitBooking.php" method="get">
				<script src="autoComplete.js"></script>
				<div class="col-xs-3">
					<input class="form-control" id="tags1" placeholder="Start Location" autocomplete="off">
				</div>
				<script src="autoComplete.js"></script>
				<div class="col-xs-3">
					<input class="form-control" id="tags2" placeholder="End Location" autocomplete="off">
				</div>
				<div class="col-xs-3">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
			<!--
			<form action="makeBooking.php" method="get">
				<div class="col-xs-3" id="inputDest">
					<input class="typeahead" type="text" placeholder="Start Location" autocomplete="off">
				</div>
				
				<div class="col-xs-3">
					<input class="form-contol" id="tags" placeholder="End Location" autocomplete="off">
				</div>
				<div class="col-xs-3">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>-->
	</body>
</html> 

<!-- CHANGE THE AUTOCMPLETE TO TYPEAHEAD-->