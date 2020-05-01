<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>

    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="../../css/admin/_form.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet"/>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
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
        <div style="float: left ">
            <h1>Sản phẩm</h1>
        </div>
        <div class=\"_btn-create\"  style="float: right">
            <button style="width: 140px "><a href="./create-product.php">Thêm sản phẩm</a></button>
        </div>
        <table id="table_id" class="display">
            <thead>
            <tr>
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Thông tin về sản phẩm</th>
                <th class="none" >Số lượng trong kho</th>
                <th>Ngày vào kho</th>
                <th>Tùy chọn</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include('../../../controller/admin/product-manage.php');
                ?>
            </tbody>
        </table>
    </div>
</div>


<div id="modal-popup" class="modal m-800">
    <div id="modal-content"></div>
</div>



<footer class="footer">

</footer>

<script src="../../js/admin/index.js"></script>
<script src="../../js/admin/product-manage.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

</body>
</html>