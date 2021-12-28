<?php 
require 'connect.php';

$id_barang = $_POST["id_barang"];

$result = [];

$queryResult = $connect->query("SELECT * FROM tbl_barag WHERE id_barang=".$id_barang);

$fetchData = $queryResult->fetch_assoc();
$result = $fetchData;

echo json_encode($result);

 ?>