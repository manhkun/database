<?php
    $view_file = '../public/view/sign-in.php';
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["name"]);
    header("Location:" . $view_file);
?>