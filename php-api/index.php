<?php
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");

require_once "config.php";

$query = "SELECT * FROM passports";

$result = mysqli_query($conn, $query) or die("Select Query Failed."); 

$count = mysqli_num_rows($result); 

if($count > 0)
{	
	$outputarr = mysqli_fetch_all($result, MYSQLI_ASSOC); // get arr
	echo json_encode($outputarr);
}
else
{	
	
	echo json_encode(array("message" => "No Product Found.", "status" => false));
}

?>