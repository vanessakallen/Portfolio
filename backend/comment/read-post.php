<!-- reads Comments data from DB and displays on page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../../dist/css/style.min.css" type="text/css">
    <!-- Tab Icon -->
    <link rel="icon" href="../../images/tabIcon.png">
    <title>Vanessa Allen - Comments</title>
</head>
<body>

    <h1 id="read-posth1">Comments</h1>
    <div class="readpost-links">
        <a href="../../pages/login.html">Return to Login</a><br><br>
        <a href="../../pages/comment.html">Make a Post</a>
    </div> 

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
            echo "<ul id='auth-readpost-ul'>";
                foreach($rows as $row) {
                    echo 
                    "<div id='auth-readpost-item'>" . 
                        "<li id='auth-readpost-message'>" . $row['message'] . "</li>" . 
                        "<p id='auth-readpost-postedon'>" . "<b>Posted on</b> " . $row['postedOn'] . "</p>" . 
                    "</div>";
                }
            echo "</ul>";
        } else {
            echo "No comments found.";
        }


    ?>

</body>
</html>
