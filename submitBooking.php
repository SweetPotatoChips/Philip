<?php
	$acountName = "Phil";//tempory, will be changed when login system is done. in finished system it will submit the users username not the current placholder
	$startLoc = $_POST["startLoc"];//gets the starting location from the post
	$endLoc = $_POST["endLoc"];//gets the end location from the post
	$startDate = $_POST["startdate"];//gets the departure date
	$endDate = $_POST["enddate"];//gets the return date

	echo "Inserting the following data to booking collections in TOB database: <br>";
	echo $startLoc;
	echo "<br>";
	echo $endLoc;
	echo "<br>";
	echo $startDate;
	echo "<br>";
	echo $endDate;
	echo "<br>";

	//server connect
	$connect = new MongoClient("mongolon1.sbarratt.uk");

	//db connect
	$db = $connect->tob;

	//selects the bookings collections
	$bookingCollection = $db->booking;

	//creats the array of data tha will be inserted into the database
	$toInsert = array(
		"name" => $acountName,//users acount name
		"start location" => $startLoc,//users start location
		"end location" => $endLoc,//users end location
		"departure date" => $startDate,//users departure date
		"return date" => $endDate//users return date
		);

	print_r($toInsert); //prints the array that is submitted to the database

	$bookingCollection->insert($toInsert);//inserts the array into the database
	
	header("refresh:5;url=index.php");//redirects to the homepage
?>