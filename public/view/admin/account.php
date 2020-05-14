<!DOCTYPE html>
<html lang="vi">
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

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">
</head>
<body>
    <?php
        session_start();
        include('../../../model/connect.php');
//        include('../../../controller/admin/create/administrator.php');
        include('../layouts/admin/header.php');
    ?>
    <div class ="content">
        <?php
            include('../layouts/admin/sidebar.php');
        ?>
        <div class="content-body">
            <div class="_btn-select"  >
                <a  href="#modal-popup-create" rel="modal:open">Thêm Quản Trị</a>
                <a class="btn-edit" data-id="<?php  echo"{$_SESSION["id"]}" ?>" onclick='getData(this)'>Sửa Thông tin</a>
            </div>
            <div class="_administratorInfo">
                <div class="_header_info ">
                    <h2>Tài khoản đang đăng nhập</h2>
                </div>
                <div class="_header_info ">
                    <?php
                    $adminInNow =  mysqli_fetch_array( mysqli_query($con, "SELECT *  FROM users  WHERE id = '{$_SESSION['id']}' "));

                    $format = "%H:%M:%S %d-%B-%Y";
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $timestamp = time();
                    $strTime = strftime($format, $timestamp );

                    echo "
                        <ul>
                            <li>
                                <div class=\"_col\">
                                    <label>Avata: </label>
                                    <div>
                                        <img width= 300 height= 200 style=\"object-fit: cover\" src=\"../../../img/avt.jpg\">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"_col _name\">
                                    <p>Tên tài khoản: {$adminInNow['name']} </p>
                                </div>
                            </li>
                            
                            <li>
                                <div class=\"_col\">
                                    <p>Email: {$adminInNow['email']}</p>
                                </div>
                            </li>
                            <li>
                                <div class=\"_col\">
                                    <p>Thời gian đăng nhập: {$strTime}</p>
                                </div>
                            </li>
                        </ul>
                        ";

                    ?>
                </div>
            </div>
            <div class="_listAdmin">
                <h2>Danh sách các quản trị viên khác</h2>
                <table id="table_id" class="display ">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Tùy chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $arrayAdmin= mysqli_query($con, "SELECT *  FROM users  WHERE id != '{$_SESSION['id']}' AND authorization = 0 ");
                        $index = 1;
                        while($adminInfo= mysqli_fetch_array($arrayAdmin)){
                            echo "
                            <tr>
                                <td>{$index}</td>
                                <td>{$adminInfo['name']}</td>
                                <td>{$adminInfo['email']}</td>
                                <td>
                                    <button class=\"btn-delete\" onclick=\"askDelete(this)\" data-id=\"{$adminInfo['id']}\"  >Xóa</button>
                                </td>
                            </tr>
                            ";
                            $index ++;
                        }
                    ?>

                    </tbody>
                </table>
            </div>

        </div>
        <div id="modal-popup-create" class="modal m-800">
            <form class="__form"  method="POST" action="../../../controller/admin/create/administrator.php" onsubmit="return validateForm()">
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
                    <div class="__input"><input id="email" type="email" name="email" required></div>
                    <div class="clear"></div>
                </div>
                <div class="__row">
                    <div class="__label"><span>Mật khẩu *</span>
                        <div class="__sublabel">Tối thiểu 6 kí tự</div>
                    </div>
                    <div class="__input"><input id="ps" type="password" name="password"  required></div>
                    <div class="clear"></div>
                </div>
                <div id= "message"></div>
                <div class="__row">
                    <div class="__label"><span>Nhập lại mật khẩu *</span>
                        <div class="__sublabel">Nhập lại mật hẩu</div>
                    </div>
                    <div class="__input"><input id= "reps" type="password" name="confirmPassword"  required></div>
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
        <div id="modal-popup-message" class="modal m-500">
            <div id="emailError"><span> Địa chỉ Email không hợp lệ. Vui lòng nhập lại </span></div>
            <div id="passLeng"> <span>Vui lòng nhập mật khẩu tối thiếu gồm 6 kí tự </span></div>
            <div id="passError"><span> Mật khẩu không chính xác, vui lòng kiểm tra lại</span></div>
        </div>

    </div>

    <script>
        $('#table_id').DataTable();
    </script>

<!--    <script>-->
<!--        $(document).ready(function () {-->
<!--            $('#modal-popup-edit .__form').submit(function (event) {-->
<!--                event.preventDefault();-->
<!--                var email= $('#_checkMail').val()-->
<!--                var pass= $('#_checkPass').val()-->
<!--                var rePass= $('#_reCheckPass').val()-->
<!--                $('_form-message').load("../../../controller/admin/edit_date/check.php", {-->
<!--                    _email = email,-->
<!--                    _pass = pass,-->
<!--                    _rePass = rePass-->
<!--                });-->
<!--            })-->
<!--        })-->
<!--    </script>-->

    <script>
        function validateForm()
        {
            // Bước 1: Lấy giá trị của 
            
            var email = document.getElementById('email').value;
            var ps = document.getElementById('ps').value;
            var reps = document.getElementById('reps').value;
        
            // Bước 2: Kiểm tra dữ liệu hợp lệ hay không

            
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
            if (!filter.test(email)) { 
                    $('#emailError').modal();
                    return false; 
            }
            if(ps!=reps) {
                $('#passError').modal();
                return false;
                
            }
            if(ps==reps){
                if(ps.length<6){
                    $('#passLeng').modal();
                    return false;
                }
                else return true;
            }      
        }
    </script>
    <script>
        function validateFormEdit()
        {
            // Bước 1: Lấy giá trị của 
            
            var email = document.getElementById('_email').value;
            var ps = document.getElementById('_ps').value;
            var reps = document.getElementById('_reps').value;
        
            // Bước 2: Kiểm tra dữ liệu hợp lệ hay không

            
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
            if (!filter.test(email)) { 
                    $('#emailError').modal();
                    return false; 
            }
            if(ps!=reps) {
                $('#passError').modal();
                return false;
                
            }
            if(ps==reps){
                if(ps.length<6){
                    $('#passLeng').modal();
                    return false;
                }
                else return true;
            }      
        }
    </script>
    <script src="../../js/admin/adminEdit.js"></script>

</body>
</html>