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
			include "header.php"; 
			?>
			<body>
			<form action="makeBooking.php" method="get">
				<script src="autoComplete.js"></script>
				<div class="col-xs-3">
					<input class="form-control" id="tags" placeholder="Start Location" autocomplete="off">
				</div>
				<script src="autoComplete.js"></script>
				<div class="col-xs-3">
					<input class="form-control" id="tags" placeholder="End Location" autocomplete="off">
				</div>
				<div class="col-xs-3">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
	</body>
</html> 

<!-- CHANGE THE AUTOCMPLETE TO TYPEAHEAD-->