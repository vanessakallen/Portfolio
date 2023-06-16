<?php

$host = "localhost";
$db = "PortfolioSite";
$user = "scwebsrv-one";
$pass = "selkirk2019!";
// $pass = "logitech207";


$dbconnect = "mysql:host=$host;dbname=$db;charset=UTF8";

$pdo = new PDO($dbconnect,$user,$pass);

// if($pdo) {
//   echo "Connected successfully!";
// } else {
  
//  echo "Something went wrong...";
// }

?>