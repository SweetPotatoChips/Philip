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
			<form action="submitBooking.php" method="get">
				<script src="autoComplete.js"></script>
				<!--<div class="col-xs-3">-->
					<input class="form-control" id="tags1" placeholder="Start Location" autocomplete="off">
				<!--</div>-->
				<script src="autoComplete2.js"></script>
				<!--<div class="col-xs-3">-->
				<br>
					<input class="form-control" id="tags2" placeholder="End Location" autocomplete="off">
				<!--</div>-->
				<!--<div class="col-xs-3">--><br>	
					<button class="btn btn-primary" type="submit">Submit</button>
				<!--</div>-->
			</form>
	</body>
</html> 

<!-- CHANGE THE AUTOCMPLETE TO TYPEAHEAD-->