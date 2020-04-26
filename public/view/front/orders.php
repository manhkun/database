<!DOCTYPE html>
<html lang="vi">
<head>
    <?php
        include('../layouts/front/head.php');
    ?>
</head>
<body>

    <?php
        // session_start();
        
        include('../../../controller/front/orders.php');
        
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
	<!-- <div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Tìm kiếm.....">
			</form>
		</div>
	</div> -->
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <?php
        include('../layouts/front/header.php');
    ?>
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
                    <img src="../../../img/add1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    
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
                                <td class=\"price-col\"><a style=\"color: #999\" href=\"./orderdetails.php?orderId={$order['orderId']}\">{$order['orderId']}</a></td>
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
    <?php
        include('../layouts/front/footer.php');
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <?php
        include('../layouts/front/embed.js.php');
    ?>
</body>

</html>