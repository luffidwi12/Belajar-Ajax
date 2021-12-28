<?php 
require 'connect.php';

$result["message"] = "";

$name = $_POST["name"];
$description = $_POST["description"];
$created = $_POST["created"];



if($name ==""){
	$result["message"] = "Name must be filled!";
}elseif($description ==""){
	$result["message"] = "Description must be filled!";
}elseif($created ==""){
	$result["message"] = "Created must be filled!";
}else{
	$queryResult = $connect->query("INSERT INTO tbl_barag VALUES (null,'".$name."','".$description."','".$created."')");

	if($queryResult){
		$result["message"] = "Successfully Added New Data!";
	}else{
		$result["message"] = "Failed Added New Data!";
	}
}

echo json_encode($result);



 ?>