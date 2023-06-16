<!-- LOGOUT USER FUNCTION -->
<?php

session_start();
unset($_SESSION['ID']);
unset($_SESSION['userUser']);

session_destroy();

header("Location: ../../pages/login.html");



?>

<!-- put this somewhere lol -->
<form action="../backend/auth/logout.php" method="POST">
    <button id="logoutBtn" type="submit">Logout</button>
</form>