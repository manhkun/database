<?php

$view_file = '../view/sign-in.php';
$a = 1;



// kết nối với csdl
$connect = mysqli_connect('localhost', 'root', '', 'project_csdl');
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

// $server = $url["host"];
// $username = $url["user"];
// $password = $url["pass"];
// $db = substr($url["path"], 1);

// $connect = new mysqli($server, $username, $password, $db);
// xử lý from đăng ký
$name = $email = $phoneNumber = $password = $confirmPassword = '';
$passwordIsNotMatch = $emailUsed = '';
if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $phoneNumber = trim($_POST['phoneNumber']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // kiểm tra dữ liệu
    $isPassed = true;
    if ($password != $confirmPassword) {
        // echo "
        //     <script language=\"javascript\">
        //         alert(\"Mật khẩu xác thực không chính xác. Vui lòng kiểm tra lại!\");
        //         window.history.back(-1);
        //     </script>
        // " ;  
        $passwordIsNotMatch = "Xác thực mật khẩu không chính xác, vui lòng nhập lại !";
        $isPassed = false;
    }
    

    // đăng kí tài khoản nếu hoàn tất phần kiểm tra

    if ($isPassed) {
        // kiểm tra xem email nhập vào đã tồn tại hay chưa
        $result = mysqli_query($connect, "SELECT * FROM users WHERE email= '$email' ");
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "
            //     <script language=\"javascript\">
            //         alert(\"Email này đã được sử dụng. Vui lòng đăng ký lại!\");
            //         window.history.back(-1);
            //     </script>
            // " ;
            $emailUsed = "E-mail này đã được sử dụng. Vui lòng đăng ký lại !";  
        } else {
            $result = mysqli_query($connect, "INSERT INTO users (name, email, password, phoneNumber, authorization ) VALUE ('$name' , '$email', '$password' , '$phoneNumber', '1'  )");
           
            // $view_file = '../public/view/sign-in.php';
            // $a = 1;

            header("Location:" . $view_file);
           
            //chuyển về trang đăng nhập

            exit();
        }
    }
}

?>