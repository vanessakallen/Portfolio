<!-- LOGIN USER FUNCTION -->

<?php 

require '../config/db.php';

$adminUser = $_POST['adminUser'];
$adminPass = $_POST['adminPass'];

$sql = 'SELECT * from Admins WHERE (adminUser = :adminUser)';

$statement = $pdo->prepare($sql);

$statement->execute([
  ':adminUser' => $adminUser,
 ':adminPass' => $adminPass
]);

  
// using fetch a single row
$result = $statement->fetch();

if($result) {
  
  if(password_verify($adminPass, $result['adminPass'])) {
    
    echo "login success";
    session_start(); // built into php
    $_SESSION['ID'] = $result['ID']; 
    $_SESSION['adminUser'] = $result['adminUser'];
    
    header("Location: ../../index.html");
  
    
  } else {
    echo "login failure";
  }
  
  
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