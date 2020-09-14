<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "db_kopiku";

// create database connection
$connection = mysqli_connect($server,$user,$password,$db_name);

function query($query){
  global $connection;
  $result = mysqli_query($connection,$query);
  $rows = [];
  while( $row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $row;
}
