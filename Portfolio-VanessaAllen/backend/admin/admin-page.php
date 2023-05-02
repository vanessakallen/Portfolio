<!-- reads Comments data from DB and displays on page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tab Icon -->
    <link rel="icon" href="../../images/tabIcon.png">
    <title>Vanessa Allen - Admin Only</title>
</head>
<body>
    
</body>
</html>
<?php

require '../config/db.php';


    // SQL query to retrieve all comments
    $sql = "SELECT * FROM Comments";

    // Prepare and execute the query
    $statement = $pdo->prepare($sql);
    $statement->execute();

    // Fetch all rows as associative array
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Display the comments in an HTML list
    if(count($rows) > 0) {
        echo "<ul>";
        foreach ($rows as $row) { echo 
        "<form action='delete-post.php' method='POST'>" . 
            "<li id='message'>" . $row['message'] . "</li>" . "Posted on: " . $row['postedOn'] . 
            "<input type='hidden' name='commentID' value='" . $row['commentID'] . "'>" .
            "<input type='submit' value='Delete'>" . 
        "</form>";
          }

        

        echo "</ul>";
    } else {
        echo "No comments found.";
    }


?>

<a href="../../pages/login.html">Back to Login</a>