<?php
    $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT orders.orderDate, SUM(totalPayment) AS total FROM `orderdetails`, orders WHERE orderdetails.orderId=orders.orderId GROUP BY orders.orderDate");
    while ( $row = mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>{$row['orderDate']}</td>
                <td>{$row['total']}</td>
            </tr>
        ";
    }
?>