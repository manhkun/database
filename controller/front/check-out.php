<?php
    function orderIdRand(){
        $rand = rand(0,999);
        $today = date("Ymd");
        $unique = "ORD".$today."_".$rand;
        return $unique;
    }
    $con = mysqli_connect('localhost','root','ngoclyo2210','project_csdl') or die('Unable To connect');
    if(isset($_POST['order'])){
        $orderId = orderIdRand();
        $name = $_POST['name'];
        $address = $_POST['apartmentNumber']." - ".$_POST['ward']." - ".$_POST['district']." - ".$_POST['province'];
        $phone = $_POST['phoneNumber'];
        // $nameofBooks = "";
        $cart = mysqli_query($con,"SELECT * FROM cart WHERE userId = '{$_SESSION['id']}'");
        while($product = mysqli_fetch_array($cart)){
            $temp = mysqli_query($con,"INSERT INTO orderdetails(`orderId`, `bookId`, `quantity`, `totalPayment`) VALUES ('{$orderId}', '{$product['bookId']}', '{$product['quantity']}', '{$product['totalPayment']}')");
        }
        $nameofBooks= mysqli_fetch_array(mysqli_query($con, "SELECT GROUP_CONCAT((SELECT name FROM books WHERE id= orderdetails.bookId) ) AS nameBook FROM `orderdetails` WHERE orderId =  '{$orderId}'"));
        $tmp = mysqli_query($con,"INSERT INTO orders(`orderId`, `userId`, `nameofBooks`, `orderDate`, `methodShip`, `status`, `customerName`, `address`, `phoneNumber`) VALUES ('{$orderId}', '{$_SESSION['id']}', '{$nameofBooks['nameBook']}' , NOW(), '{$_SESSION['methodShip']}', '0', '{$name}', '{$address}', '{$phone}')");
        header("Location: orders.php");
        echo $name;
    }
?> 