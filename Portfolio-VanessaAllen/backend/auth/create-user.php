<?php

require '../config/db.php';

// Define variables from form
$userUser = $_POST['userUser'];
$userPass = $_POST['userPass'];


$hash_pass = password_hash($userPass, PASSWORD_DEFAULT);


try {
  
$sql = "INSERT INTO Users (userUser, userPass) VALUES (:userUser, :userPass)";

$statement = $pdo->prepare($sql); // so this prevents SQL Injection
$statement->execute([
  ':userUser' => $userUser,
  ':userPass' => $hash_pass
]);

  if($statement) {
    echo "creation <b>successful</b>! ";
    header("Location: ../../pages/comment.html");
  }

}

 catch(PDOException $e) {
       echo $e->getMessage();
     }



?>