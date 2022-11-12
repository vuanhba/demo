<?php
error_reporting(0);
include('controllers/c_product.php');
$c_product = new C_product();
$c_product->Hien_thi();
$c_product->Tim_kiem_san_pham();
?>

