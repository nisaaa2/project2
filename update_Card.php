<?php 
include_once("database.php");

$db->query("UPDATE card SET kode='$_POST[code]',nama='$_POST[name]', diskon='$_POST[discount]', iuran='$_POST[member_fee]' WHERE id='$_POST[id]' ");
header("location: list_card.php");

?>





