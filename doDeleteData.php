<?php 
require 'connect.php';

$result["message"] = "";

$id_barang = $_POST["id_barang"];

$connect->query("DELETE FROM tbl_barag WHERE id_barang=".$id_barang);