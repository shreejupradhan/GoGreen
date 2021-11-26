<?php
session_start();
array_push($_SESSION['cart_item)id'], $_POST['id']);
echo "<script>alert('Added to cart')</script>";
header("Location:products.php");
