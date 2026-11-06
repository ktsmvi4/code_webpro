<?php
require('condb.php');
if(isset($_GET['id'])){
    $id =$_GET['id'];

    mysqli_query($conn,"DELETE FROM `product` WHERE id =$id");
}
mysqli_close($conn);
header("Location: index.php");
exit;
?>