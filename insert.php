<?php
require('condb.php');
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    $name_product = $_POST['name_product'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $date = $_POST['date'];

    if(!empty($name_product) && !empty($price) && !empty($category) && !empty($date)){
        $sql = "INSERT INTO `product`(`name_product`, `price`, `category`, `date`) VALUES ('$name_product','$price','$category','$date')";
        mysqli_query($conn,$sql);
        header("Location: index.php");
        exit;
    }
}
?>