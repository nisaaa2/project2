<?php 
include_once("database.php");

$db->query("INSERT INTO restock VALUES ('','$_POST[tanggal]','$_POST[nomor]','$_POST[produk_id]','$_POST[jumlah]','$_POST[harga]','$_POST[vendor_id]')");
header("location: list_restock.php");

?>



