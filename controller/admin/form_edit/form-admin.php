<?php

    include('../../../model/connect.php');

    $__id = isset($_POST['id']) ? $_POST['id'] : false;
    $___admin = mysqli_fetch_array(mysqli_query($con, "SELECT *  FROM users  WHERE id= '$__id'"));
//action = "../../../controller/admin/edit_data/adminEdit.php"
echo "
   <form class=\"__form\"  method=\"POST\" action = \"../../../controller/admin/edit_data/adminEdit.php\" onsubmit=\"return validateFormEdit()\">
                <div class=\"__header\">
                    <span>Chỉnh sửa thông tin</span>
                </div>
                <div class=\"__hidden\">
                    <input type=\"hidden\" name=\"__id\" value=\"{$__id}\">
                </div>
                <div class=\"__row\">
                    <div class=\"__label\"><span>Tên quản trị viên*</span>
                        <div class=\"__sublabel\">Tên quản trị viên</div>
                    </div>
                    <div class=\"__input\"><input type=\"text\" name=\"__name\" value=\"{$___admin['name']}\" required></div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"__row\">
                    <div class=\"__label\"><span>Email *</span>
                        <div class=\"__sublabel\">Email</div>
                    </div>
                    <div id=\"_checkMail\" class=\"__input\"><input id=\"_email\" type=\"email\" name=\"__email\" value=\"{$___admin['email']}\" required></div>
                    <div class=\"clear\"></div>
                </div>
                
                <div class=\"__row\">
                    <div id=\"_checkPass\" class=\"__label\"><span>Mật khẩu *</span>
                        <div class=\"__sublabel\">Tối thiểu 6 kí tự</div>
                    </div>
                    <div class=\"__input\"><input id=\"_ps\" type=\"password\" name=\"__password\"  value=\"{$___admin['password']}\" required></div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"__row\">
                    <div id=\"_reCheckPass\"class=\"__label\"><span>Nhập lại mật khẩu *</span>
                        <div class=\"__sublabel\">Nhập lại mật hẩu</div>
                    </div>
                    <div class=\"__input\"><input id=\"_reps\" type=\"password\" name=\"__confirmPassword\" value=\"{$___admin['password']}\" required></div>
                    <div class=\"clear\"></div>
                </div>
                <div class=\"row\">
                    <div id=\"__noti\"></div>
                </div>

                <div class=\"__buttons\">
                    <input type=\"button\" class=\"cancle __button\" onclick=\"closeForm()\" value=\"Cancle\">
                    <input type=\"submit\" class=\"submit __button\"   name =\"submit\" value=\"Submit\">
                </div>
                
            </form>

";
?>