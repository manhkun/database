<?php
// kết nối với csdl
include('../../../model/connect.php');
// xử lý from create
$__name = $__email = $__phoneNumber = $__password = $__confirmPassword = '';
// $__passwordIsNotMatch = $__emailUsed = '';
 if (isset($_POST['__submit'])) {
    $__id = trim($_POST['__id']);
    $__name = trim($_POST['__name']);
    $__email = trim($_POST['__email']);
    $__password = trim($_POST['__password']);
    $__confirmPassword = trim($_POST['__confirmPassword']);

    
    $__phoneNumber = trim($_POST['__phoneNumber']);
    if(is_file($_FILES['newImage']['tmp_name'])){
        $img = $_FILES['newImage']['name'];
        $file_tmp = $_FILES['newImage']['tmp_name'];
        move_uploaded_file($file_tmp  , "../../../img/avatar/$img");
    } else{
        $img = ($_POST['oldImage']);
    }

    // kiểm tra dữ liệu
    $__isPassed = true;
    if ($__password != $__confirmPassword) {
        $__isPassed = false;
    }


    // đăng kí tài khoản nếu hoàn tất phần kiểm tra

    if ($__isPassed) {
        $__result = mysqli_query($con, "UPDATE admin SET `name` ='$__name' , email = '$__email', `password` = '$__password', phoneNumber= '$__phoneNumber', avatar = '$img', updated_at= NOW() WHERE id = '$__id'");
    }
    header("Location: ../../../public/view/admin/account.php");
    exit();
 }

?>