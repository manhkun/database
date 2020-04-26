<?php
    session_start();
    $message="";
    unset($_SESSION["email"]);
    unset($_SESSION["pass"]);
    unset($_SESSION["name"]);
    if(isset($_POST["submit"])) {
        $con = mysqli_connect('localhost','root','ngoclyo2210','project_csdl') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM users WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["email"] = $row['email'];
            $_SESSION["password"] = $row['password'];
            $_SESSION["name"] = $row['name'];
        } else {
            $message = "Tài khoản hoặc mật khẩu không chính xác !";
        }
    }
    if(isset($_SESSION["email"])) {
        if( (int) $row['authorization'] == 0){
            header("Location: index.php");
        }else{
            $message = "Tài khoản hoặc mật khẩu không chính xác !";
        }      
    }
?>  
