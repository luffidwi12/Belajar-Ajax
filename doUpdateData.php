<?php 
require 'connect.php';

$result["message"] = "";

$id_barang = $_POST["id_barang"];
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
	$queryResult = $connect->query("UPDATE tbl_barag SET name ='".$name."',description = '".$description."',created = '".$created."' WHERE id_barang=".$id_barang);

	if($queryResult){
		$result["message"] = "Successfully Update Data!";
	}else{
		$result["message"] = "Failed Update Data!";
	}
}

echo json_encode($result);


 ?>