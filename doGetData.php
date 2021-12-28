<?php 
require 'connect.php';

$queryResult = $connect->query("SELECT * FROM tbl_barag");
$result = [];
while($fethData = $queryResult->fetch_assoc()){
$result[] = $fethData; 
}

echo json_encode($result);



 ?>