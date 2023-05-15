<?php 
include_once("database.php");

$db->query("INSERT INTO product VALUES ('','$_POST[id]','$_POST[sku]','$_POST[name]','$_POST[purchase_price]','$_POST[sell_price]','$_POST[stock]','$_POST[min_stock]','$_POST[product_typr_id]','$_POST[restock_id]'')");
header("location: list_product.php");

?>



