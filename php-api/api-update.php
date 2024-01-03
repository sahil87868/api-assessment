<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data_arr['name'];
$email = $data_arr['email'];
$passwword = $data_arr['passwword
$c_password = $data_arr['c_password'];
$mobile = $data_arr['mobile'];
include "config.php";

$sql = "UPDATE passports SET name = '{$name}', email = {$email}, passwword = '{$passwword}', c_password = '{$c_password}', mobile = '{$mobile}'WHERE id = {$id}";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'passports Record Updated.', 'status' => true));
}else{
  echo json_encode(array('message' => 'passports Record Not Updated.', 'status' => false));
}


?>
