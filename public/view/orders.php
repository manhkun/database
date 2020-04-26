<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <?php
        include('../../controller/orders.php');
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Tìm kiếm.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="../../img/logo.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="../../img/icons/search.png" alt="" class="search-trigger">
                    <img src="../../img/icons/man.png" alt="">
                    <!-- <a href="#">
                        <img src="../../img/icons/bag.png" alt="">
                         <span>2</span>
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
                        echo "<a href=\"./index.php\">Xin chào, {$_SESSION['name']}</a>";
                    }
                    else {
                        echo"<a href=\"./register.php\">Đăng ký</a>
                        <a href=\"./sign-in.php\" class=\"in\">Đăng nhập</a>
                        ";
                    }
                ?>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./categories.php">Cửa hàng</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.html">Sản phẩm</a></li>
                                <li><a href="shopping-cart.html">Mua hàng</a></li>
                                <li><a href="check-out.html">Thanh toán</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="./contact.html">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Đơn hàng<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../img/add1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <!-- <div class="shopping-method">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-info">
                        <div class="total-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Mã hóa đơn</th>
                                        <th>Ngày đặt hàng</th>
                                        <th>Tổng hàng</th>
                                        <th>Phương thức vận chuyển</th>
                                        <th>Phí giao hàng</th>
                                        <th class="total-cart">Tổng cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($cart = mysqli_fetch_array($carts)){
                                        $product = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM books WHERE id = '{$cart['bookId']}'"));
                                        echo"
                                        <tr>
                                        <td class=\"product-col\">
                                            <div class=\"p-title\">
                                                <h5>{$product['name']}</h5>
                                            </div>
                                        </td>
                                        <td class=\"price-col\">{$product['price']}</td>
                                        <td class=\"quantity-col\">                                   
                                            <h5 >{$cart['quantity']}</h5>
                                        </td>
                                        <td class=\"total\">{$cart['totalPayment']} Đ</td>
                                        <td class=\"product-close\"><a href=\"../../controller/shopping-cart.php?delete={$cart['id']}\" class=\"text-body\"><i class=\"fa fa-trash-o\"></i></a></td>
                                        </tr>
                                        ";
                                        }
                                    ?> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   -->
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Mã đơn hàng</th>
                            <th class="method-ship">Phương thức vận chuyển</th>
                            <th>Ngày đặt</th>      
                            <th>Tình trạng</th>         
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                        while($order = mysqli_fetch_array($temp)){
                            if($order['methodShip'] == 'standard') $order['methodShip'] = "Tiêu chuẩn";
                            elseif($order['methodShip'] == 'fast') $order['methodShip'] = "Nhanh";
                            elseif($order['methodShip'] == 'express') $order['methodShip'] = "Hỏa tốc";
                            echo"
                                <tr>
                                <td class=\"product-col\">
                                    <div class=\"p-title\">
                                        <h5>{$order['nameofBooks']}</h5>
                                    </div>
                                </td>
                                <td class=\"price-col\"><a href=\"./orderdetails.php?orderId={$order['orderId']}\">{$order['orderId']}</a></td>
                                <td class=\"quantity-col\">                                   
                                    <h5>{$order['methodShip']}</h5>
                                </td>
                                <td class=\"total\">{$order['orderDate']}</td>
                                <td class=\"product-close\">{$order['status']}</td>
                                </tr>   
                                ";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
           <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Liên hệ</h4>
                            <ul>
                                <li>Liên hệ</li>
                                <li>Cộng đồng</li>
                                <li>Việc làm</li>
                                <li>Vận chuyển</li>
                                <li>Liên hệ với chúng tôi</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Chăm sóc khách hàng</h4>
                            <ul>
                                <li>Tìm kiếm</li>
                                <li>Chính sách bảo mật</li>
                                <li>2019 Lookbook</li>
                                <li>Vận chuyển và giao hàng</li>
                                <li>Bộ sưu tập</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Dịch vụ</h4>
                            <ul>
                                <li>Giao hàng miễn phí</li>
                                <li>Trả lại miễn phí</li>
                                <li>Nhượng quyền </li>
                                <li>Các điều khoản & điều kiện</li>
                                <li>Chính sách bảo mật</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Thông tin</h4>
                            <ul>
                                <li>Phương thứ thanh toán</li>
                                <li>Thời gian và chi phí vận chuyển</li>
                                <li>Trả lại sản phẩm</li>
                                <li>Phương thức vận chuyển</li>
                                <li>Sự phù hợp của sản phẩm</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


		</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>