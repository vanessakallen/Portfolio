<?php

require '../config/db.php';

// Define variables from form
$message = $_POST['message'];

try {
  
$sql = "INSERT INTO Comments (message) VALUES (:message)";

$statement = $pdo->prepare($sql); // so this prevents SQL Injection
$statement->execute([
  ':message' => $message
]);

  if($statement) {
    header("Location: read-post.php");
  }

}

 catch(PDOException $e) {
       echo $e->getMessage();
     }



?>