<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
	</head>
	<body>
		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">
			<?php 
				$a = "home";
				include "includes\bootstrap.php";
				include "includes\header.php"; 
			?>
			<br>
			<script scr="inputDest.js"></script>

			<form action="index.php" method="get">
				<input type="text" id="inputDest"></input>
				<input type="submit">
			</form>

		</div>
	</body>
</html>