<?php 
include_once("database.php");

$db->query("INSERT INTO supplier VALUES ('','$_POST[id]','$_POST[name]','$_POST[phone]','$_POST[adddress]','$_POST[contact_name]'')");
header("location: list_supplier.php");

?>



