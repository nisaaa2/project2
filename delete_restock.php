<?php 
include_once("database.php");

$db->query("DELETE FROM restock WHERE id='$_GET[id]'");
header("location: list_restock.php");


?>


