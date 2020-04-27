<?php
    $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT *  FROM books ");
    while ( $row = mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>{$row['id']}</td>
                <td><h4>{$row['name']}</h4><br><img src=\"../../../img/products/{$row['image']}\"></td>
                <td>{$row['price']}</td>
                <td>Tác giả: {$row['author']}<br>Thể loại: {$row['category']}<br>Chi tiết: {$row['description']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['dateModified']}</td>
                <td>
                    <button>Sửa</button>
                    <button>Xóa</button>
                </td>
            </tr>
        ";
    }
?>

                        