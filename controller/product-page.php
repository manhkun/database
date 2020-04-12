<?php
    $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($con, "SELECT * FROM books WHERE id = $id");
        $row = mysqli_fetch_array($result);
    }
    
?>