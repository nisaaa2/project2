<?php 
include_once("database.php");

$db->query("INSERT INTO customer VALUES ('','$_POST[id]','$_POST[name]','$_POST[gender]','$_POST[phone]','$_POST[email]','$_POST[address]','$_POST[card_id]'')");
header("location: list_customer.php");

?>



