<?php
    $con = mysqli_connect('localhost','root','','project_csdl') or die('Unable To connect');
    $result = mysqli_query($con, "SELECT * FROM books");
?>