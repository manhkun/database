<?php
    function orderIdRand(){
        $rand = rand(0,999);
        $today = date("Ymd");
        $unique = "ORD".$today."_".$rand;
        return $unique;
    }
    $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
    if(isset($_POST['order'])){
        $orderId = orderIdRand();
        $name = $_POST['name'];
        $address = $_POST['apartmentNumber']." - ".$_POST['ward']." - ".$_POST['district']." - ".$_POST['province'];
        $phone = $_POST['phoneNumber'];
        $nameofBooks = "";
        $cart = mysqli_query($con,"SELECT * FROM cart WHERE userId = '{$_SESSION['id']}'");
        while($product = mysqli_fetch_array($cart)){
            $temp = mysqli_query($con,"INSERT INTO orderdetails(`orderId`, `bookId`, `quantity`, `totalPayment`) VALUES ('{$orderId}', '{$product['bookId']}', '{$product['quantity']}', '{$product['totalPayment']}')");
        }
        $tmp = mysqli_query($con,"INSERT INTO orders(`orderId`, `userId`, `nameofBooks`, `orderDate`, `methodShip`, `status`, `customerName`, `address`, `phoneNumber`) VALUES ('{$orderId}', '{$_SESSION['id']}', ' ', NOW(), '{$_SESSION['methodShip']}', '0', '{$name}', '{$address}', '{$phone}')");
        header("Location: ../view/orders.php");
        echo $name;
    }
?>