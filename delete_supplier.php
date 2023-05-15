<?php 
include_once("database.php");

$db->query("DELETE FROM supplier WHERE id='$_GET[id]'");
header("location: list_supplier.php");


?>


