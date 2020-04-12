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
        session_start();
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
                    </a> -->
                    <?php
                    if(isset($_SESSION['name'])){
                        echo "<a href=\"../../controller/logout.php\">
                                <img src=\"../../img/icons/log_out.png\" alt=\"\">
                              </a>";
                    }
                    ?>
                </div>
               
            `   <div class="user-access">
                    <?php
                        if(isset($_SESSION['name'])){
                            echo "<a href=\"\">Xin chào, {$_SESSION['name']}</a>";
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
                        <li><a href="./index.html">Trang chủ</a></li>
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
   

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="../../img/background1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Tri Thức.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="../../img/background2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Giải trí.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="../../img/background3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2020</h1>
                            <h2>Tra cứu.</h2>
                            <a href="#" class="primary-btn">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="../../img/icons/f-delivery.png" alt="">
                            <h4>Giao hàng nhanh</h4>
                            <p>Chúng tôi nhận giao hàng toàn quốc, đảm bảo hàng hóa được giao một cách nhanh chóng nhất với chi phí thấp. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="../../img/icons/coin.png" alt="">
                            <h4>Thanh toán tiện lợi</h4>
                            <p>Chúng tôi chấp nhận thanh toán bằng nhiều phương thức khác nhau, rất an toàn và tiện lợi. </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="../../img/icons/chat.png" alt="">
                            <h4>Hoạt động 24/7</h4>
                            <p>Với đội ngũ hỗ trợ nhiệt tình, mọi vấn đề thắc mắc của bạn về chúng tôi sẽ được giải đáp ngay lập tức. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".science">Sách khoa học</li>
                            <li data-filter=".novel">Tiểu thuyết</li>
                            <li data-filter=".comic">Truyện tranh</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row" id="product-list">
                <div class="col-lg-3 col-sm-6 mix all science  ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-1.jpg" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>Green Dress with details</h6>
                            <p>$22.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all comic ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-2.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all comic ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-3.jpg" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all comic ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-4.jpg" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all comic ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-5.jpg" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all novel ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-6.jpg" alt=""></a>
                            <div class="p-status popular">popular</div>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$35.50</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all novel ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-7.gif" alt=""></a>
                            <div class="p-status">new</div>
                        </figure>
                        <div class="product-text">
                            <h6>Green Dress with details</h6>
                            <p>$22.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all novel ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-8.jpg" alt=""></a>
                            <div class="p-status sale">sale</div>
                        </figure>
                        <div class="product-text">
                            <h6>Yellow Maxi Dress</h6>
                            <p>$25.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all novel ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-9.jpg" alt=""></a>
                        </figure>
                        <div class="product-text">
                            <h6>One piece bodysuit</h6>
                            <p>$19.90</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all novel ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-10.jpg" alt=""></a>
                            <div class="p-status popular">popular</div>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$35.50</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mix all novel ">
                    <div class="single-product-item">
                        <figure>
                            <a href="#"><img src="../../img/products/img-11.jpg" alt=""></a>
                            <div class="p-status popular">popular</div>
                        </figure>
                        <div class="product-text">
                            <h6>Blue Dress with details</h6>
                            <p>$35.50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

  

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