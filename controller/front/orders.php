<?php
    session_start();
    include('../../../model/connect.php');
    $temp = mysqli_query($con, "SELECT * FROM orders WHERE userId = '{$_SESSION['id']}'");
?> 