<?php 
include_once("database.php");

$db->query("DELETE FROM product WHERE id='$_GET[id]'");
header("location: list_product.php");


?>


