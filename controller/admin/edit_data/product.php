<?php
    include('../../../model/connect.php');
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $author = trim($_POST['author']);
    $category = trim($_POST['category']);
    $description = trim($_POST['description']);;
    $amount = trim($_POST['amount']);;
    $dateModified = trim($_POST['dateModified']);
    $result = mysqli_query($con, " UPDATE books SET `name` = '$name', price = '$price', author = '$author', category = '$category', description = '$description', amount = '$amount', dateModified = '$dateModified' WHERE id = '$id' ");
    header("Location: ../../../public/view/admin/product-manage.php" );

?>