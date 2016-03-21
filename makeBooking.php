<!DOCTYPE html>
<html>
	<head>
		<title>Make Booking</title>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
			<?php 
			$action = "booking"; //makes the make booking button highlighted so the user knows they are on that page
			include "includes\bootstrap.php"; //includes the bootstrap code (css/js/jquery)
			include "includes\header.php"; //includes header files that has the navbar
			?>

			<body>
			<div class="alert alert-info" style="display: inline-block;margin-left: 13px;"><!-- this is an info alert that tells the user to endter start and end dstination -->
				Please enter your desired start and end locations below
			</div>
			
			<br>

			<script src="javascript\inputCheck.js"></script> <!-- get the js script to make sure the user has entered a valid entry -->
			<script src="javascript\autoComplete.js"></script><!-- gets the js script to get the auto comlete drop downs on the textboxs -->

			<form  name="myForm" action="submitBooking.php" onsubmit="return inputCheck()" method="post"><!-- This is the form that is send the users data to the submitBooking.php file. It also called teh inputCheck js fucntion that check if the users input id valid -->

				<div class="col-xs-3"><!-- the col-xs-3 div keeps the 2 textboxes and submit button  inline with each other-->
					<input class="form-control" name="startLoc" id="tags1" placeholder="Start Location" autocomplete="off"  required><!-- text box for start location -->
				</div>

				<div class="col-xs-3">
					<input class="form-control" name="endLoc" id="tags2" placeholder="End Location" autocomplete="off" required><!-- text box for end location -->
				</div>

				<div class="col-xs-3">
					<button class="btn btn-primary" type="submit">Submit</button><!-- submit button for the form -->
				</div>

				<script>
					$('.datepicker').datepicker({
    					format: 'mm/dd/yyyy',
    					startDate: '-3d'
						});
				</script>
				<div class="input-group date" data-provide="datepicker">
				    <input type="text" class="form-control">
				    <div class="input-group-addon">
				        <span class="glyphicon glyphicon-th"></span>
				    </div>
				</div>

			</form>

			<br><br><br>
			
			<strong><p id="error"></p></strong><!-- if the inputCheck detects invalid data it will return the error here -->

			</div>
	</body>
</html> 
