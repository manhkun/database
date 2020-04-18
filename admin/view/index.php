<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Trang web bán sách">
    <meta name="keywords" content="hiệu sách online, mua sách ở đâu, mua sách online ở đâu, đọc sách điện tử, đọc sách hay online ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store - Website bán sách hàng đầu </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" type="text/css" href="../css/index.css" />
</head>
<body>  
    <?php
        session_start();
    ?>
    <div class="menu">
        <div class="logo">
            <a href="./index.php"><img src="../../img/logo.png" alt=""></a>
        </div>
        <div id="menu-content">
            <a href="#" class="menu-item">
                <div class="menu-item-text">Trang chủ</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-item-text">Đơn hàng</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-item-text">Sản phẩm</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-item-text">Khách hàng</div>
            </a>
            <a href="#" class="menu-item">
                <div class="menu-item-text">Lợi nhuận</div>
            </a>
    
        </div>
    </div>
    <div class="content">
        <div class="content-header">          
            <div class="header-right">
                <img src="../../img/icons/search.png" alt="" class="search-trigger">
                <img src="../../img/icons/man.png" alt="">
                <!-- <a href="#">
                    <img src="../../img/icons/bag.png alt="">
                </a> -->
                <?php
                    if(isset($_SESSION['name'])){
                        echo "<a href=\"../../controller/logout.php\">
                                <img src=\"../../img/icons/log_out.png\" alt=\"\">
                              </a>";
                    }
                ?>
            </div>              
            <div class="user-access">
                <?php
                    if(isset($_SESSION['name'])){
                        echo "<a href=\"\">Xin chào, {$_SESSION['name']}</a>";
                    }
                   
                ?>
            </div> 
        </div>
        
    </div>
    
 
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/customer.js"></script>
</body>
</html>