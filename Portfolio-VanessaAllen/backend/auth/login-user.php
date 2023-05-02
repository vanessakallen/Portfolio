<!-- LOGIN USER FUNCTION -->

<?php 

require '../config/db.php';

// Define variables from form
$userUser = $_POST['userUser'];
$userPass = $_POST['userPass'];
// echo $userPass;

$sql = 'SELECT * from Users WHERE (userUser = :userUser)';

$statement = $pdo->prepare($sql);

$statement->execute([
  ':userUser' => $userUser
]);

  
// using fetch a single row
$result = $statement->fetch();

if($result) {
  
  // echo $result['userPass'];
  // echo $result ['userUser'];

  if(password_verify($userPass, $result['userPass'])) {
    
    echo "login success";
    session_start(); // built into php
    $_SESSION['ID'] = $result['ID']; 
    $_SESSION['userUser'] = $result['userUser'];
    
    // redirect to comment.html so user can post a comment
    header("Location: ../../pages/comment.html");
  
    
  } 
  
} else {
  echo "No user found. Please try again.";
}



//echo $result['ID'];
  
// using fetchAll returns everything that matches
/*
$result = $statement->fetchAll();

if($result) {
  foreach($result as $row) {
    echo $row['ID']
  }
}
*/
?>