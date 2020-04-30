<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Người dùng</title>

    <script src="../../js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="../../css/admin/_form.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <?php
        session_start();
        include('../../../controller/admin/index.php');
    ?>
    <?php
        include('../layouts/admin/header.php')
    ?>
    <div class ="content">
        <?php
            include('../layouts/admin/sidebar.php')
        ?>
        <div class="content-body">
            <div><h1>Người dùng<h1></div>
            <table id="table_id" class="display" >
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
<!--                        <th>Mật khẩu</th>-->
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('../../../controller/admin/user-manage.php');
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
    <script src="../../js/admin/user-manage.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
</body>
</html>