<?php
    echo "
    <form class=\"__form\"  method=\"POST\" action=\"../../../controller/admin/create/product.php\" enctype=\"multipart/form-data\">
        <div class=\"__row\">
            <div class=\"__label\"><span>Tên sản phẩm *</span>
                <div class=\"__sublabel\">Tên sản phẩm</div>
            </div>
            <div class=\"__input\"><input type=\"text\" name=\"name\" placeholder=\"Tên sản phẩm\"  required></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"__row\">
            <div class=\"__label\"><span>Hình ảnh</span>
                <div class=\"__sublabel\">Hình ảnh</div>
            </div>
            <div class=\"__input\"><input style='border: 0px;' type=\"file\" name=\"image\" accept=\"image/x-png,image/gif,image/jpeg\"  required></div>
            <div class=\"clear\"></div>
        </div> 
        <div class=\"__row\">
            <div class=\"__label\"><span>Đơn giá *</span>
                <div class=\"__sublabel\">Đơn giá</div>
            </div>
            <div class=\"__input\"><input type=\"text\" name=\"price\" ></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"__row\">
            <div class=\"__label\"><span>Tác giả</span>
                <div class=\"__sublabel\">Tác giả</div>
            </div>
            <div class=\"__input\"><input type=\"text\" name=\"author\"  ></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"__row\">
            <div class=\"__label\"><span>Thể loại</span>
                <div class=\"__sublabel\">Thể loại</div>
            </div>
            <div class=\"__input\"><input type=\"text\" name=\"category\"  ></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"__row\">
            <div class=\"__label\"><span>Thông tin chi tiết</span>
                <div class=\"__sublabel\">Thông tin chi tiết</div>
            </div>
            <div class=\"__input\"><textarea type=\"text\" name=\"description\"  ></textarea></div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"__row\">
            <div class=\"__label\"><span>Số lượng vào kho</span>
                <div class=\"__sublabel\">Số lượng vào kho</div>
            </div>
            <div class=\"__input\"><input type=\"number\" name=\"amount\"></div>
            <div class=\"clear\"></div>
        </div>
        
        <div class=\"__row\">
            <div class=\"__label\"><span>Ngày vào kho</span>
                <div class=\"__sublabel\">Ngày vào kho</div>
            </div>
            <div class=\"__input\"><input type=\"date\" name=\"dateModified\" min=\"2019-1-1\" max=\"2030-1-1\" ></div>
            <div class=\"clear\"></div>
        </div>
    
        <div class=\"__buttons\">
            <input type=\"button\" class=\"cancle __button\"  value=\"Cancle\">
            <input type=\"submit\" class=\"submit __button\" name =\"submit\" value=\"Submit\">
        </div>
     </form>
    ";

?>