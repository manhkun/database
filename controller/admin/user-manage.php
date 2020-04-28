<?php
    include('../../../model/connect.php');
    $result = mysqli_query($con, "SELECT *  FROM users WHERE authorization=1");
    while ( $row = mysqli_fetch_array($result)){
        $stt= (int)$row['id'] - 3;
        echo "
            <tr>
                <td>$stt</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phoneNumber']}</td>
                <td>{$row['password']}</td>
            </tr>
        ";
    }
?>