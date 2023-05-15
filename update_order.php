<?php 
include_once("database.php");

$db->query("UPDATE order SET id='$_POST[id]',order_number='$_POST[urder_number]', date='$_POST[date]', qty='$_POST[qty]', total_price='$_POST[total_price]', customer_id='$_POST[customer_id]', product_id='$_POST[product_id]'WHERE id='$_POST[id]' ");
header("location: list_order.php");

?>





