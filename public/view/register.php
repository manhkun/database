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
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <?php
        include('../../controller/register.php')
    ?>
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
                    <a href="./index.php"><img src="../../img/logo.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="../../img/icons/search.png" alt="" class="search-trigger">
                    <img src="../../img/icons/man.png" alt="">
                    <a href="#">
                        <img src="../../img/icons/bag.png" alt="">
                        <!-- <span>2</span> -->
                    </a>
                </div>
                
                <div class="user-access">
                    <a href="./register.php">Đăng ký</a>
                    <a href="./sign-in.php" class="in">Đăng nhập</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./categories.php">Cửa hàng</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.php">Sản phẩm</a></li>
                                <li><a href="shopping-cart.php">Mua hàng</a></li>
                                <li><a href="check-out.php">Thanh toán</a></li>
                            </ul>
                        </li>
                    
                        <li><a href="./contact.php">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="page-breadcrumb ">
                        <h2>Đăng ký<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-8  ">
                    <form action="" method="POST" class="contact-form">
                    <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" required placeholder="Tên">
                                <input type="email" name="email" required placeholder="E-mail">
                                <input type="tel" name="phoneNumber" required placeholder="Số điện thoại">
                                <input type="password" name="password" required placeholder="Mật khẩu">
                                <input type="password" name="confirmPassword" required placeholder="Nhập lại mật khẩu">
                               
                            </div>
                            <div class="mx-auto mb-3 text-danger">
                                <?php
                                    if($passwordIsNotMatch != '') echo "$passwordIsNotMatch";
                                    if($emailUsed != '') echo "$emailUsed";
                                ?>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" name="register" >Đăng ký</button>
                            </div>
                            <div class="col-lg-12">
                                <a href="sign-in.php" style="color:red">Bạn đã có tài khoản?</a>
                            </div>
                        </div>
                    </form>                   
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- Contact Section End -->

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
    <script src="../js/register.js"></script>
    <script src="../js/validation.js"></script>
</body>

</html>