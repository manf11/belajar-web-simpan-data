<?php

require_once('database.php'); // disini kita ambil semua kodingan yang ada di database

// pertama siapin query nya dulu
$sql = "SELECT * FROM product";
$query = mysqli_query($connection, $sql);

$products = [];

while($product = mysqli_fetch_assoc($query)){
    $products[] = $product;
}


require_once('views/index.php'); //ini panggil index.php yang ada di view
