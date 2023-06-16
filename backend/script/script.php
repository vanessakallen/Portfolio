<?php

// ADMIN LOGIN
// Makes sure adminUser and adminPass matches user and pass that was set in MySQL DB

// define adminUser and adminPass variable
$adminUser = $_POST['adminUser'];
$adminPass = $_POST['adminPass'];

// define checkAdminBtn variable
$checkAdminBtn = $_POST['checkAdminBtn'];

if (isset($checkAdminBtn)) {
    checkAdminLogin($adminUser, $adminPass);
}

function checkAdminLogin($adminUser, $adminPass) {
    if ($adminUser === "Jester24#!" && $adminPass === "Jester24#!") {
        header("Location: https://scwebsrv-one.work/Portfolio-VanessaAllen/backend/admin/admin-page.php");
        exit();
    } else {
        echo "Sorry, only admins are allowed to view this page." . "<br>";
        // Redirect
        echo "<a href='../../pages/login.html'>Return</a>";
    }
}
?>