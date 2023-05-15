<?php 
include_once("database.php");

$db->query("UPDATE card SET id='$_POST[id]',name='$_POST[name]', gender='$_POST[gender]', phone='$_POST[phone]', email='$_POST[email] , address='$_POST[address]', card_id='$_POST[card_id]'' WHERE id='$_POST[id]' ");
header("location: list_customer.php");

?>





