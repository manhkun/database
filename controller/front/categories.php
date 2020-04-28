<?php
    include('../../../model/connect.php');
    if(isset($_GET['sortby'])){
        $sort = $_GET['sortby'];
        switch($sort){
            case 'newest':
                $result = mysqli_query($con, "SELECT * FROM books ORDER BY dateModified");
                break;
            case 'priceup':
                $result = mysqli_query($con, "SELECT * FROM books ORDER BY price");
                break;
            case 'pricedown':
                $result = mysqli_query($con, "SELECT * FROM books ORDER BY price DESC");;
                break;
        }
    }
    else $result = mysqli_query($con, "SELECT * FROM books");
?>