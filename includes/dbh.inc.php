<?php


$servername = "localhost:3307" ;
$dbUsername = "root" ;
$dbPassword = "" ;
$dbName = "corpgrowth" ;

$conn = mysqli_connect($servername, $dbUsername, $dbPassword , $dbName);

if (!$conn) {
  die("Connection to Database Failed:" . mysqli_connect_error()) ;
}
