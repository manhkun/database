<?php
    session_start();
    include('../../../model/connect.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($con, "SELECT * FROM books WHERE id = $id ");
        $row = mysqli_fetch_array($result);
        $total_product = mysqli_num_rows(mysqli_query($con, "SELECT * FROM books"));
        $previous = $id-1;
        $next = $id+1;
        
    }
    if(isset($_POST['addCart'])){
        $_SESSION['amount'] = $_POST['amount'];
        $_SESSION['buy'] = true;
        if(isset($_SESSION['id'])) {
            header("Location: shopping-cart.php?bookid={$row['id']}");       
        }
        else header("Location: sign-in.php");
       
    }
    
?>