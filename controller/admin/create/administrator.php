<?php
// kết nối với csdl
include('../../../model/connect.php');
// xử lý from create
$name = $email = $phoneNumber = $password = $confirmPassword = '';
$passwordIsNotMatch = $emailUsed = '';
$isPassed = 1;
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    
    $phoneNumber = trim($_POST['phoneNumber']);
    $avt = $_FILES['avatar']['name'];
    $file_tmp = $_FILES['avatar']['tmp_name'];

    if ($isPassed==1) {
       // kiểm tra xem email nhập vào đã tồn tại hay chưa
        $result = mysqli_query($con, "SELECT * FROM users WHERE email= '$email' ");
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            $isPassed = 0;
        }else {
            $insert = "INSERT INTO admin (`name`, email, `password`,  phoneNumber, avatar, created_at  ) 
                        VALUES ('$name' , '$email', '$password' , '$phoneNumber', '$avt', NOW()  )";

            if(mysqli_query($con, $insert)){
                move_uploaded_file($file_tmp  , "../../../img/avatar/$avt");
                header("Location: ../../../public/view/admin/account.php");
            }
            
            exit();
       }
    }
   
}

?>