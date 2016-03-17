<?php

$client = new Mongo\Client("mongolon1.sbarratt.uk");

$collection = $client->bookings;

$collection->insert($data);

try 

?>