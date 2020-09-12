<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "db_kopiku";

// create database connection
$connection = mysqli_connect($server,$user,$password,$db_name);
if (!$connection) {
    die("Failed to connect database." . mysqli_connect_error());
}

// Create table: product_category
$sql = "CREATE TABLE product_category(
        id INT(128)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nama_kopi VARCHAR(50) NOT NULL)";

if (mysqli_query($connection, $sql)) {
    echo "Table product_category sucessfully created";
}

// Create table: product
$sql = "CREATE TABLE product(
        id INT(128) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        product_kategori_id VARCHAR(50) NOT NULL,
        name VARCHAR(100),
        price INT)";

if (mysqli_query($connection, $sql)) {
    echo "Table product sucessfully created";
}

// close database connection
mysqli_close($connection);
