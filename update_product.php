<?php 
include_once("database.php");

$db->query("UPDATE product SET kode='$_POST[code]',nama='$_POST[name]', diskon='$_POST[discount]', member_fee='$_POST[member_fee]' WHERE id='$_POST[id]' ");
header("location: list_product.php");

?>





