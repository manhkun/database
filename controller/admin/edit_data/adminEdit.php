<?php
// kết nối với csdl
include('../../../model/connect.php');
// xử lý from create
$__name = $__email = $__phoneNumber = $__password = $__confirmPassword = '';
$__passwordIsNotMatch = $__emailUsed = '';
if (isset($_POST['__submit'])) {
    $__name = trim($_POST['__name']);
    $__phoneNumber = trim($_POST['__phoneNumber']);
    $__email = trim($_POST['__email']);
    $__password = trim($_POST['__password']);
    $__confirmPassword = trim($_POST['__confirmPassword']);

    // kiểm tra dữ liệu
    $__isPassed = true;
    if ($__password != $__confirmPassword) {

//        $__passwordIsNotMatch = "Xác thực mật khẩu không chính xác, vui lòng nhập lại !";
        $__isPassed = false;
    }


    // đăng kí tài khoản nếu hoàn tất phần kiểm tra

    if ($__isPassed) {
        // kiểm tra xem email nhập vào đã tồn tại hay chưa
//        $__result = mysqli_query($con, "SELECT * FROM users WHERE email= '$__email' ");
//        $__num = mysqli_num_rows($__result);
//        if ($__num > 0) {
////            $__emailUsed = "E-mail này đã được sử dụng. Vui lòng đăng ký lại !";
//        }
//        else {
            $__result = mysqli_query($con, "UPDATE users SET `name` ='$__name' , email = '$__email', password = '$__password', phoneNumber =  '$__phoneNumber' WHERE id = '$__id'");

//        }
//        header("Location : ../../../public/view/admin/account.php");
//        exit();
    }
    header("Location : ../../../public/view/admin/account.php");
    exit();
}

?>