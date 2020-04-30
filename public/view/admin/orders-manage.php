<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa đơn</title>

    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
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
            <div><h1>Doanh thu<h1></div>
            <table id="table_id" class="display" >
                <thead>
                    <tr>
                        <th>Thời gian</th>
                        <th>Số tiền thu được</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{$row['orderDate']}</td>
                        <td>{$row['total']}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
    <footer class="footer">

    </footer>
    <?php
        include('../layouts/front/embed.js.php');
    ?>
    <script src="../../js/admin/index.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
</body>
</html>