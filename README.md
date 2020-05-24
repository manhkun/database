<<<<<<< HEAD
<!-- Headings -->
![Markdown Logo](https://uet.vnu.edu.vn/wp-content/uploads/2019/03/logo-outline-1.png)
# BÁO CÁO BÀI TẬP LỚN CSDL
## TRANG WEB MUA BÁN SÁCH ONLINE
* Môn học: Cơ sở dữ liệu
* Mã lớp: INT2207 1
* Giáo viên: TS.Lê Hồng Hải
* Các thành viên trong nhóm:
    * Phùng Quốc Mạnh
    * Phạm Thị Bích Ngọc
    * Nguyễn Xuân Lâm
<!-- CONTENT -->
### <strong> I. MÔ TẢ DỰ ÁN </strong>
#### 1. Mô tả chung:
- Trang web được tạo ra nhằm mục đích phục vụ cho cửa hàng bán sách trên nền tảng trực tuyến
- Khách hàng có thể xem, chọn mua các sản phẩm sách của cửa hàng
- Cửa hàng có thể xem được các đơn hàng khách hàng đặt mua, quản lý các đơn hàng, sản phẩm của cửa hàng
#### 2. Mô tả chức năng
a. Các chức năng của khách hàng
|Chức năng|Mô tả|
|--------------|---------------|
|Đăng ký|Khách hàng nhập các thông tin bao gồm: tên, email, mật khẩu, xác nhận mật khẩu và bấm Đăng ký để tiến hành đăng ký|
|Đăng nhập|Khách hàng nhập thông tin bao gồm: email, mật khẩu và bấm đăng nhập để tiến hành hăng nhập|
|Xem các sản phẩm|Khách hàng có thể xem các sản phẩm của cửa hàng hoặc xem thông tin của từng sản phẩm bao gồm: tên sách, tên tác giả, thể loại, mô tả, giá thành, số lượng còn lại trong kho|
|Thêm sản phẩm vào giỏ hàng|Sau khi chọn được sản phẩm, khách hàng có thể lựa chọn số lượng và thêm vào giỏ hàng, xóa sản phẩm khỏi giỏ hàng|
|Tiến hành đặt mua|Khách hàng có thể lựa chọn phương thức vận chuyển, nhập các thông tin cần thiết như: tên, số điện thoại, địa chỉ để tiến hành đặt hàng các sản phẩm có trong giỏ hàng|
|Xem thông tin đơn hàng|Khách hàng có thể xem thông tin đơn hàng bao gồm: tên các sản phẩm, mã vận đơn, ngày đặt hàng, tình trạng đơn hàng và có thể xem chi tiết các đơn hàng bao gồm: chi tiết các sản phẩm, thông tin khác hàng, tổng tiền cần phải thanh toán|

b. Các chức năng của cửa hàng(Người quản lý)
|Chức năng|Mô tả|
|--------------|---------------|
|Đăng nhập|Người quản lý có thể đăng nhập bằng tài khoản được cung cấp trước bao gồm: email, mật khẩu để tiến hành đăng nhập|
|Cập nhật thông tin|Người quản lý có thể chỉnh sửa thông tin của bản thân người quản lý đó bao gồm các thông tin như: tên, số điện thoại, ảnh đại diện, email, mật khẩu |
|Thêm/xóa người quản lý|Người quản lý có thể thêm người quản lý khác bao gồm các thông tin như: tên, số điện thoại, ảnh đại diện, email, mật khẩu hoặc xóa người quản lý khác|
|Quản lý doanh thu|Người quản lý có thể xem doanh thu của cửa hàng theo từng ngày, từng tháng hoặc từ ngày này đến ngày khác cũng như xem thông tin cơ bản về các hóa đơn được đặt trong ngày đó ( bao gồm mã hóa đơn và tổng tiền)|
|Quản lý sản phẩm|Người quản lý có thể xem số lượng sản phẩm còn lại, chi tiết của từng sản phẩm, ngày nhập kho của từng sản phẩm, có thể xem, sửa hoặc xóa sản phẩm trong kho hoặc thêm các sản phẩm mới|
|Quản lý khách hàng|Người quản lý có thể xem thông tin tài khoản khách hàng, ngày tạo tài khoản, tìm kiếm thông tin , sửa thông tin, xóa tài khoản khách hàng|
|Quản lý hóa đơn|Người quản lý có thể xem toàn bộ hóa đơn của cửa hàng, xem chi tiết từng hóa đơn|
#### 3. Mô tả cơ sở dữ liệu
a. Ứng dụng của cơ sở dữ liệu
- Quản lý tài khoản khách hàng
- Quản lý sản phẩm
- Quản lý giỏ hàng của từng khách hàng
- Quản lý các hóa đơn của từng khách hàng và của cả cửa hàng
- Quản lý chi tiết của từng đơn hàng

b. Các yêu cầu về dữ liệu cần lưu trữ:
- Dữ liệu về khách hàng và người quản lý(admin) bao gồm: mã người dùng, tên, email, mật khẩu, ngày tạo
- Dữ liệu về sản phẩm bao gồm: mã sách, tên sách, giá thành, mô tả, tác giả, thể loại, số lượng , link ảnh, ngày thêm
- Dữ liệu về giỏ hàng bao gồm: mã người dùng, mã sách, số lượng sách, tổng hóa đơn
- Dữ liệu về các hóa đơn bao gồm: mã hóa đơn, mã người dùng, ngày đặt hàng, phương thức vận chuyển, tình trạng, tên khách hàng, địa chỉ, số điện thoại
- Dữ liệu về chi tiết từng hóa đơn bao gồm: mã hóa đơn, mã sách, số lượng, tổng tiền

### <strong> II. THIẾT KẾ CƠ SỞ DỮ LIỆU </strong>
#### 1. Thiết kế mô hình thực thể quan hệ
* Tập thực thể tài khoản khách hàng:
    * Mã khách hàng
    * Tên khách hàng
    * Email
    * Mật khẩu
    * Ngày tạo
    * Ngày chỉnh sửa
* Tập thực thể tài khoản người quản lý (admin):
    * Mã người quản lý
    * Tên
    * Email
    * Mật khẩu
    * SDT
    * Ảnh đại diện
    * Ngày kích hoạt
    * Ngày cập nhật
* Tập thực thể sản phẩm (sách):
    * Mã sách
    * Tên sách
    * Tác giả
    * Giá
    * Thể loại
    * Mô tả
    * Số lượng trong kho
    * Ngày nhập kho
    * Ngày cập nhật
* Tập thực thể hóa đơn: 
    * Mã hóa đơn
    * Tên khách hàng
    * Số điện thoại
    * Địa chỉ
    * Tình trạng vận chuyển
    * Phương thức vận chuyển

* Mô hình hóa ER:
<!-- content -->
![ER](img/ER.png)

#### 2. Lược đồ quan hệ
- <strong>Từ mô hình E-R, ta xây dựng mô hình quan hệ tương ứng:</strong>

    - <strong>Chuyển các thực thể thành các quan hệ tương ứng: </strong> 

        1. Tài khoản khách hàng(<ins>Mã khách hàng</ins>, Tên, Email, Mật khẩu)
        1. Sách(<ins>Mã sách</ins>, Tên sách, Giá, Tác giả, Thể loại, Mô tả, Số lượng, Link ảnh, Ngày nhập)
        1. Hóa đơn(<ins>Mã hóa đơn</ins>, Mã khách hàng, Ngày đặt hàng, Phương thức vận chuyển, Tình trạng, Tên khách hàng, Địa chỉ khách hàng, SDT)

    - <strong>Chuyển đổi các mối quan hệ: </strong>
        
        1. Quan hệ "Chọn sản phẩm" -> Giỏ hàng(<ins>Mã giỏ hàng</ins>, Mã khách hàng, Mã sách, Số lượng, Tổng tiền)
        1. Quan hệ "Chứa" -> Chi tiết hóa đơn(Mã hóa đơn, Mã sách, Số lượng, Tổng tiền)
* Kết quả thu được: Lược đồ quan hệ:

![Relational Model](img/RelationalModel.png)

Lược đồ quan hệ trên MySQL:


![Relational Model](img/databaseEER.png)

### <strong>III. CÁC CÂU LỆNH TRUY VẤN SQL </strong>
#### 1. Các truy vấn liên quan đến thao tác của khách hàng và lấy dữ liệu trong CSDL
* Đăng ký:
    * Kiểm tra xem email có tồn tại hay không (Nếu đã tồn tại sẽ trả về bảng có số hàng > 0):
    ~~~~sql
    SELECT * FROM users WHERE email= '$email'
    ~~~~
    * Nếu email chưa tồn tại sẽ thêm tài khoản của khách hàng đăng ký vào CSDL:
    ~~~~sql
    INSERT INTO users (name, email, password, created_at) VALUE ('$name', '$email', '$password', NOW())
    ~~~~
* Đăng nhập:
    * Kiểm tra tài khoản và mật khẩu (Nếu đúng sẽ trả về bảng có số hàng > 0):
    ~~~~sql
    SELECT * FROM users WHERE email='$email' and password = '$password'
    ~~~~
* Gian hàng:
    * Lấy thông tin sản phẩm trong CSDL đăng lên gian hàng: 
        * Sắp xếp theo sản phẩm mới nhất:
        ~~~~sql
        SELECT * FROM books ORDER BY dateModified DESC
        ~~~~
        * Sắp xếp theo giá từ thấp tới cao:
        ~~~~sql
        SELECT * FROM books ORDER BY price ASC
        ~~~~
        * Sắp xếp theo giá từ cao xuống thấp:
        ~~~~sql
        SELECT * FROM books ORDER BY price DESC
        ~~~~
    * Tìm kiếm sản phẩm trong gian hàng ($name là nội dung tìm kiếm):
    ~~~sql
    SELECT *, MATCH (`name`, `description`, `author`, `category`) AGAINST ('{$name}') as score 
    FROM books 
    WHERE MATCH (`name`, `description`, `author`, `category`) AGAINST ('{$name}') > 0 
    ORDER BY score DESC;
    ~~~
* Sản phẩm: 
    * Lấy ra thông tin sản phẩm theo ID:
    ~~~sql
    SELECT * FROM books WHERE id = $id
    ~~~
    * Lấy ra các sản phẩm liên quan (các sản phẩm cùng thể loại hoặc tác giả):
    ~~~sql
    SELECT * FROM books 
    WHERE (category = '$category' OR author = '$author') AND NOT id = '$id'
    ~~~
    * Tiến hành trừ số lượng hàng hóa trong kho khi sản phẩm được mua
    ~~~sql
    UPDATE books 
    SET amount = ({$amountofBooks['amount']} - {$product['quantity']}) , updated_at = NOW() 
    WHERE id = '{$product['bookId']}'
    ~~~
* Giỏ hàng:
    * Lấy ra thông tin sách cẩn mua:
    ~~~sql 
    SELECT * FROM books WHERE id = '$bookID'
    ~~~
    * Lấy ra thông tin các sản phẩm giỏ hàng của người dùng:
    ~~~sql
    SELECT * FROM cart WHERE bookId = '$bookID' and userId = '$userId'
    ~~~
    * Thêm sản phẩm vào giỏ hàng:
    ~~~sql
    INSERT INTO cart(`userId`, `bookId`, `quantity`, `totalPayment`) 
    VALUE ('{$userId}', '{$bookID}', '{$amount}', '{$total}')
    ~~~
    * Xóa sản phẩm trong giỏ hàng:
    ~~~sql 
    DELETE FROM cart WHERE id = {$delId}
    ~~~
    * Xóa toàn bộ sản phẩm trong giỏ hàng
    ~~~sql
    DELETE FROM cart WHERE userId = '{$userID}'
    ~~~
    * Tính tổng tiền và số lượng ($_SESSION['id'] là id của khách hàng hiện tại):
    ~~~sql
    SELECT SUM(`totalPayment`) as `totalPayment`, SUM(`quantity`) as `sumQuantity` 
    FROM cart WHERE userId = '{$_SESSION["id"]}'
    ~~~
* Thanh toán
    * Thêm thông tin đơn hàng:
    ~~~sql
    INSERT INTO orders(`orderId`, `userId`,`orderDate`, `methodShip`, `status`, `customerName`, `address`, `phoneNumber`) 
    VALUES ('{$orderId}', '{$_SESSION['id']}', NOW(), '{$_SESSION['methodShip']}', '0', '{$name}','{$address}', '{$phone}')
    ~~~
    * Thêm thông tin chi tiết đơn hàng ($product: sản phảm lấy ra trong giỏ hàng của người dùng hiện tại):
    ~~~sql 
    INSERT INTO orderdetails(`orderId`, `bookId`, `quantity`, `totalPayment `)
    VALUES ('{$orderId}', '{$product['bookId']}', '{$product['quantity']}', '{$product['totalPayment']}'
    ~~~
    * Sau khi đặt hàng thành công sẽ xóa toàn bộ sản phẩm trong giỏ hàng của người dùng hiện tại:
    ~~~sql
    DELETE FROM cart WHERE userId = '{$_SESSION['id']'
    ~~~
* Đơn hàng
    * Lấy ra các đơn hàng của người dùng hiện tại:
    ~~~sql
    SELECT * FROM orders WHERE userId = '{$_SESSION['id']}'
    ~~~
* Chi tiết các đơn hàng:
    * Lấy ra thông tin của đơn hàng:
    ~~~sql
    SELECT * FROM orderdetails WHERE orderId= '$orderID'
    ~~~
    * Tính tổng tiền và số lượng sản phẩm:
    ~~~sql
    SELECT SUM(`totalPayment`) as `totalPayment`, SUM(`quantity`) as `sumQuantity` 
    FROM orderdetails 
    WHERE orderId = '{$orderID}'
    ~~~
    * Lấy ra thông tin khách hàng, phương thức vận chuyển:
    ~~~sql
    SELECT * FROM orders WHERE orderId= '$orderID'
    ~~~
#### 2. Các truy vấn liên quan đến thao tác của người quản lý (admin)
* Tổng hợp
    * Tính doanh thu của cửa hàng theo ngày (xếp theo thời gian)
    ~~~sql
    SELECT orders.orderDate, SUM(totalPayment) AS total 
    FROM `orderdetails`, orders 
    WHERE orderdetails.orderId=orders.orderId 
    GROUP BY orders.orderDate ORDER BY orders.orderDate DESC
    ~~~
    * Tổng hợp 
      * Số lượng hàng hóa: 
      ~~~sql
      SELECT COUNT(*) AS solg FROM books
      ~~~
      * Số lượng người dùng đăng ký tài khoản: 
      ~~~sql
      SELECT COUNT(*) AS solg FROM users 
      ~~~
      * Số lượng các hóa đơn : 
      ~~~sql
      SELECT COUNT(*) AS solg FROM orders
      ~~~    

* Quản lý sản phẩm:
    * Thêm sản phẩm:
    ~~~sql
    INSERT INTO books(`name`, `image`, `price`, `author`, category, description, amount,dateModified) 
    VALUES ('{$name}', '{$img}', '{$price}', '{$author}', '{$category}', '{$description}', '{$amount}','{$dateModified}')
    ~~~
    * Xóa sản phẩm:
    ~~~sql
    DELETE FROM books WHERE id = '$id'
    ~~~
    * Chỉnh sửa sản phẩm:
    ~~~sql
    UPDATE books 
    SET `name` = '$name', `image`= '$img', price = '$price', author = '$author', category = '$category', description = '$description', amount = '$amount', dateModified = '$dateModified', updated_at= NOW() 
    WHERE id = '$id'
    ~~~
* Quản lý tài khoản (admin):
    * Thêm tài khoản người quản lý:
    ~~~sql
    INSERT INTO admin (`name`, email, `password`, phoneNumber, avatar, created_at) 
    VALUES ('$name' , '$email', '$password' , '$phoneNumber', '$avt', NOW())
    ~~~
    * Xóa tài khoản người quản lý:
    ~~~sql
    DELETE FROM admin  WHERE id = '$id'
    ~~~
    * Chỉnh sửa thông tin tài khoản người quản lý:
    ~~~sql
    UPDATE admin 
    SET `name` ='$__name' , email = '$__email', `password` = '$__password', phoneNumber= '$__phoneNumber', avatar = '$img', updated_at= NOW() 
    WHERE id = '$__id'
    ~~~
* Quản lý khách hàng
    * Xóa tài khoản người dùng:
    ~~~sql
    DELETE FROM users WHERE id = '$id'
    ~~~
    * Chỉnh sửa tài khoản người dùng:
    ~~~sql 
    UPDATE users 
    SET email = '$email', `name`= '$name', updated_at= NOW() 
    WHERE id = '$id';
    ~~~
* Quản lý hóa đơn
   * Lấy ra thông tin của toàn bộ hóa đơn đang có (xếp theo thời gian đặt hàng)
    ~~~sql
    SELECT *  FROM orders ORDER BY orderDate DESC
    ~~~

