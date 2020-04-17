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
        include('../../controller/product-page.php');
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
                    <a href="./index.php"><img src="../../img/logo.png" alt=""></a>
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
                <div class="user-access">
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
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Shirts<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#" >Night Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
            <div class="product-control">
                <?php
                    if($id == 1){
                        echo"
                            <a href=\"./product-page.php?id={$next}\">Next</a>";
                    } elseif($id == $total_product){
                        echo"
                            <a href=\"./product-page.php?id={$previous}\">Previous</a>";
                    }else echo"
                            <a href=\"./product-page.php?id={$previous}\">Previous</a>
                            <a href=\"./product-page.php?id={$next}\">Next</a>";                
                ?>

            </div>
            <div class="row">
                <?php
                    echo"<div class=\"col-lg-6\">

                            <div class=\"product-slider owl-carousel\">
                            <div class=\"product-img\">
                            <figure>
                                <img src=\"../../img/products/{$row['image']}\" alt=\"\">
                                <div class=\"p-status\">new</div>
                            </figure>
                        </div>
                        <div class=\"product-img\">
                            <figure>
                                <img src=\"../../img/products/{$row['image']}\" alt=\"\">
                                <div class=\"p-status\">new</div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"product-content\">
                        <h2>{$row['name']}</h2>
                        <div class=\"pc-meta\">
                            <h5>{$row['price']} Đ</h5>
                            <div class=\"rating\">
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>
                        </div>
                        <p>{$row['description']}</p>
                        <ul class=\"tags\">
                            <li><span>Thể loại :</span>{$row['category']}</li>
                            <li><span>Tác giả :</span> {$row['author']}</li>
                        </ul>
                        <form action=\"\" method=\"POST\" class=\"contact-form\">
                            <div class=\"row\">
                                <div class=\"product-quantity\">
                                    <div class=\"pro-qty\">
                                        <input type=\"text\" name=\"amount\" value=\"1\" class=\"mt-2\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <button type=\"submit\" name=\"addCart\">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </form>
                </div>";
                ?>

            </div>
        </div>
    </section>
    <!-- Product Page Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Các sản phẩm liên quan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $result1 = mysqli_query($con, "SELECT * FROM books WHERE (category = '{$row['category']}' OR author = '{$row['author']}') AND NOT id = '{$row['id']}'");
                    $count = 0;
                    while($product = mysqli_fetch_array($result1) and $count < 4 ){
                        echo"                                       
                        <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <a href=\"#\"><img src=\"../../img/products/{$product['image']}\" alt=\"\"></a>
                                <div class=\"p-status\">new</div>
                            </figure>
                            <div class=\"product-text\">
                                <h6>{$product['name']}</h6>
                                <p>{$product['price']} Đ</p>
                            </div>
                        </div>
                    </div>";
                    $count++;
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Related Product Section End -->

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