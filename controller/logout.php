<?php
    $view_file = '../public/view/sign-in.php';
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["name"]);
    unset($_SESSION["id"]);
    unset($_SESSION['active']);
    unset($_SESSION['fee']);
    unset($_SESSION['buy']);
    unset($_SESSION['amount']);
    header("Location:" . $view_file);
?>