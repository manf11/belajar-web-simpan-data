<?php
// $server = "localhost";
// $user = "root";
// $password = "";
// $db_name = "db_kopiku";

// $koneksi=mysqli_connect($server,$user,$password,$db_name);
//  if(!$koneksi)
//{
//  die("koneksi gagal".mysqli_connect_error());
//}
// $sql="CREATE TABLE product_category(
//   id INT(128)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   nama_kopi VARCHAR(50) NOT NULL)";

// $sql="CREATE TABLE product(
//     id INT(128)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     product_kategori_id VARCHAR(50) NOT NULL,
//     name VARCHAR(100),
//     price INT)";
// $sql="CREATE TABLE product_category(
//     id INT(128)UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     nama_kopi VARCHAR(50) NOT NULL)";
//   if(mysqli_query($koneksi,$sql)){
//       echo "Succesfully create table product_category";
//     }else{
//       echo "tabel error" .mysqli_error($koneksi);
//     }
//   if(mysqli_query($koneksi,$sql)){
//       echo "Succesfully create table product";
//     }else{
//       echo "tabel error" .mysqli_error($koneksi);
//     }
//table product_category
// $sql='loremipsum';
// if (mysqli_query($koneksi,$sql)){
//   echo "table product_category sucessfully created";
// }
// $sql='loremipsum';
// if (mysqli_query($koneksi,$sql)){
//   echo "table product sucessfully created";
// }
//  mysqli_close($koneksi);

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
