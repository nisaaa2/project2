<?php 
include_once("database.php");

$db->query("DELETE FROM card WHERE id='$_GET[id]'");
header("location: list_card.php");


?>


