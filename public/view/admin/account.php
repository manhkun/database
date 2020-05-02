<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <script src="../../js/jquery-3.3.1.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

    <link rel="stylesheet" href="../../css/admin/index.css" type="text/css">
    <link rel="stylesheet" href="../../css/admin/_form.css" type="text/css">

    <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


</head>
<body>
    <?php
        session_start();
        include('../../../controller/admin/create/administrator.php');
        include('../layouts/admin/header.php');
    ?>
    <div class ="content">
        <?php
            include('../layouts/admin/sidebar.php');
        ?>
        <div class="content-body">
            <div class="_btn-select"  >
                <a  href="#modal-popup-create" rel="modal:open">Thêm Quản Trị</a>
                <a class=\"btn-edit\" data-id="<?php  echo"{$_SESSION["id"]}" ?>" onclick='getData(this)'>Sửa Thông tin</a>
            </div>
            <div class="_administratorInfo">
                <div class="_header_info ">
                    <h2>Tài khoản </h2>
                </div>
                <div class="_header_info ">

                </div>
            </div>
            <div class="_listAdmin">
                <h2>Danh sách quản trị viên</h2>
                <table id="table_id" class="display ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
        <div id="modal-popup-create" class="modal m-800">
            <form class="__form"  method="POST" action="#" >
                <div class="__header">
                    <span>Thêm quản trị</span>
                </div>
                <div class="__row">
                    <div class="__label"><span>Tên quản trị viên*</span>
                        <div class="__sublabel">Tên quản trị viên</div>
                    </div>
                    <div class="__input"><input type="text" name="name" placeholder="Tên quản trị"  required></div>
                    <div class="clear"></div>
                </div>
                <div class="__row">
                    <div class="__label"><span>Email *</span>
                        <div class="__sublabel">Email</div>
                    </div>
                    <div class="__input"><input type="email" name="email" required></div>
                    <div class="clear"></div>
                </div>
                <div class="__row">
                    <div class="__label"><span>Số điện thoại *</span>
                        <div class="__sublabel">Số điện thoại</div>
                    </div>
                    <div class="__input"><input type="tel" name="phoneNumber" required></div>
                    <div class="clear"></div>
                </div>
                <div class="__row">
                    <div class="__label"><span>Mật khẩu *</span>
                        <div class="__sublabel">Tối thiểu 6 kí tự</div>
                    </div>
                    <div class="__input"><input type="password" name="password"  required></div>
                    <div class="clear"></div>
                </div>
                <div class="__row">
                    <div class="__label"><span>Nhập lại mật khẩu *</span>
                        <div class="__sublabel">Nhập lại mật hẩu</div>
                    </div>
                    <div class="__input"><input type="password" name="confirmPassword"  required></div>
                    <div class="clear"></div>
                </div>

                <div class="__buttons">
                    <input type="button" class="cancle __button" onclick="closeForm()" value="Cancle">
                    <input type="submit" class="submit __button" name ="submit" value="Submit">
                </div>
            </form>
        </div>

        <?php

        ?>
        <div id="modal-popup-edit" class="modal m-800">

        </div>

    </div>

    <script>
        $('#table_id').DataTable();
    </script>

    <script src="../../js/admin/adminEdit.js"></script>

</body>
</html>