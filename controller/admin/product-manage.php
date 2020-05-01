<?php
include('../../../model/connect.php');
$result = mysqli_query($con, "SELECT *  FROM books ");
while ($row = mysqli_fetch_array($result)) {
    echo "
            <tr>
                <td>{$row['id']}</td>
                <td><h4>{$row['name']}</h4><br><img width=100 height=100 style=\"object-fit: cover\" src=\"../../../img/products/{$row['image']}\"></td>
                <td>{$row['price']}</td>
                <td><b>Tác giả:</b> {$row['author']}<br><b>Thể loại:</b> {$row['category']}<br><b>Giới thiệu:</b> {$row['description']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['dateModified']}</td>
                <td>
                    <button class=\"btn-view\" >Xem</button>
                    <button onclick='getData(this)' class=\"btn-edit\" data-id=\"{$row['id']}\" >Sửa</button>
                    <button class=\"btn-delete\" onclick=\"askDelete(this)\" data-id=\"{$row['id']}\"  >Xóa</button>
                </td>
            </tr>
        ";
}
?>

                        