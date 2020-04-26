<?php
    session_start();
    $con = mysqli_connect('localhost','root','ngoclyo2210','project_csdl') or die('Unable To connect');
    $temp = mysqli_query($con, "SELECT * FROM orders WHERE userId = '{$_SESSION['id']}'");
?> 