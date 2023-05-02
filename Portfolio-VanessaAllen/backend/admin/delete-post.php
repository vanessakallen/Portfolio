<!-- DELETE COMMENT FUNCTION -->

<?php

require '../config/db.php';

// Make sure the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the ID of the comment to delete from the form data
    $commentID = $_POST['commentID'];

    // SQL query to delete the comment with the given ID
    $sql = "DELETE FROM Comments WHERE commentID = :commentID";

    // Prepare and execute the query, passing the comment ID as a parameter
    $statement = $pdo->prepare($sql);
    $statement->execute(['commentID' => $commentID]);

    // Redirect back to the page displaying the comments
    header('Location: admin-page.php');
    exit;
}

?>