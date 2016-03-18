<?php
	$acountName = "Phil";//tempory, will be changed when login system is done. in finished system it will submit the users username not the current placholder
	$startData = $_POST["startLoc"];//gets the starting location from the post
	$endData = $_POST["endLoc"];//gets the end location from the post

	echo "Inserting the following data to booking collections in TOB database: <br>";
	echo $startData;
	echo "<br>";
	echo $endData;
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
		"start location" => $startData,//users start location
		"end location" => $endData,//users end location
		);

	print_r($toInsert); //prints the array that is submitted to the database

	$bookingCollection->insert($toInsert);//inserts the array into the database
	
	header("refresh:5;url=index.php");//redirects to the homepage
?>