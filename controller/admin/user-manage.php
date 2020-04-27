<?php
    $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT *  FROM users ");
    while ( $row = mysqli_fetch_array($result)){
        echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phoneNumber']}</td>
                <td>{$row['password']}</td>
            </tr>
        ";
    }
?>