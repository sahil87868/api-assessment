<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data_arr = json_decode(file_get_contents("php://input"), true);

$name = $data_arr['name'];
$email = $data_arr['email'];
$passwword = $data_arr['passwword
$c_password = $data_arr['c_password'];
$mobile = $data_arr['mobile'];

include "config.php";

$sql = "INSERT INTO passports(name, email, passwword, c_password, mobile) VALUES ('{$name}', {$email}, '{$passwword}' , '{$c_password}', '{$mobile}')";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'Student Record Inserted.', 'status' => true));

}else{

 echo json_encode(array('message' => 'Student Record Not Inserted.', 'status' => false));

}
?>
