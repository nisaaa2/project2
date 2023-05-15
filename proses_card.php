<?php 
include_once("database.php");

$db->query("INSERT INTO card VALUES ('','$_POST[kode]','$_POST[nama]','$_POST[diskon]','$_POST[iuran]')");
header("location: list_card.php");

?>



