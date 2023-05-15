<?php 
include_once("database.php");

$db->query("UPDATE restock SET id='$_POST[id]',restock_number='$_POST[restock_number]', date ='$_POST[date]', qty='$_POST[qty]', price='$_POST[price]' , supplier_id='$_POST[supplier_id]' WHERE id='$_POST[id]' ");
header("location: list_restock.php");

?>





