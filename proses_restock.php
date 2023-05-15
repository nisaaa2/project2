<?php 
include_once("database.php");

$db->query("INSERT INTO restock VALUES ('','$_POST[id]','$_POST[restock_number]','$_POST[date]','$_POST[qty]','$_POST[price]','$_POST[supplier_id]'')");
header("location: list_restock.php");

?>



