<?php
    include('../../../model/connect.php');
    $id = trim($_POST['id']);
    $email = trim($_POST['email']);
    $phoneNumber = trim($_POST['phoneNumber']);
    $result = mysqli_query($con, " UPDATE users SET email = '$email', phoneNumber = '$phoneNumber' WHERE id = '$id' ");
    header("Location: ../../../public/view/admin/user-manage.php" );

?>