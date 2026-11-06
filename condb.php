<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "productdb";

$conn = mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
}
mysqli_set_charset($conn,"utf8");
?>