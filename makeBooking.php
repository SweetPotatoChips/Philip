<!DOCTYPE html>
<html>
	<head>
		<title>makeBooking</title>
		<?php
		include "bootstrap.php";
		?>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
			<?php 
			$a = "booking";
			include "header.php"; 
			?>
			<body>
			<h4>Please enter your desired start and end locations below</h4>
			<br>
			<form action="submitBooking.php" method="post">
				<script src="autoComplete.js"></script>
				<div class="col-xs-3">
					<input class="form-control" name="startLoc" id="tags1" placeholder="Start Location" autocomplete="off">
				</div>
				<script src="autoComplete2.js"></script>
				<div class="col-xs-3">
					<input class="form-control" name="endLoc" id="tags1" placeholder="End Location" autocomplete="off">
				</div>
				<div class="col-xs-3">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
	</body>
</html> 

<!-- CHANGE THE AUTOCMPLETE TO TYPEAHEAD-->