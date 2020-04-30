<?php
    include('../../../model/connect.php');
    $result = mysqli_query($con, "SELECT *  FROM users WHERE authorization=1");
    $t=1;
    while ( $row = mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>$t</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phoneNumber']}</td>
                <td>
                    <button class=\"btn-view\" >Xem</button>
                    <button onclick='getData(this)' class=\"btn-edit\" data-id=\"{$row['id']}\" >Sửa</button>
                    <button class=\"btn-delete\" >Xóa</button>
                </td>
            </tr>
        ";
        $t++;
    }
?>