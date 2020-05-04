<?php
    include('../../../model/connect.php');
    $result = mysqli_query($con, "SELECT *  FROM orders ");
    $stt =1;
    while ($row = mysqli_fetch_array($result)) {
        $id= $row['orderId'];
        $name = mysqli_fetch_array(mysqli_query($con, "SELECT name FROM orders , users WHERE orders.userId = users.id AND orders.orderId = '$id' "));
        echo "
                <tr>
                    <td>{$stt}</td>
                    <td>{$row['orderId']}</td>
                    <td>{$row['orderDate']}</td>
                    <td>{$row['status']}</td>
                    <td>
                        <button style='width: 150px !important;' class=\"btn-view\" ><a href=\"show-orderdetail.php?orderId={$row['orderId']}\">Xem chi tiết</a></button>
                    </td>
                </tr>
            ";
        $stt++;
    }
?>

