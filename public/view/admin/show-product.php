<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>

    <script src="../../js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="../../css/admin/show.css" type="text/css">
</head>
<body>
<?php
session_start();
include('../../../controller/admin/index.php');
?>
<?php
include('../layouts/admin/header.php')
?>
<div class="content">
    <?php
    include('../layouts/admin/sidebar.php')
    ?>
    <div class="content-body">
        <div class="_header">
            <h1 style="display: inline !important;"><a href ="./product-manage.php">Sản phẩm</a></h1>
            <h3 style="display: inline !important;">/Thông tin chi tiết</h3>
        </div>
        <div class="_show">
            <?php
            include('../../../controller/admin/show/product.php');
            ?>
        </div>
        <div class="_footer">
            <button class="btn-back" >
                <a href="./product-manage.php">Trở lại</a>
            </button>
        </div>
    </div>
</div>





<footer class="footer">

</footer>

<script src="../../js/admin/index.js"></script>
</body>
</html>