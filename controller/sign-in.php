<?php
    session_start();
    $message="";
    //$view_file1 = '../public/view/index.php';
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
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
        header("Location: ../view/index.php");
    } else {
        // echo "
        // <script language=\"javascript\">
        //     alert(\"Email hoặc mật khẩu không chính xác\");
        //     window.history.back(-1);
        // </script>
        // " ;  
    }
?>  