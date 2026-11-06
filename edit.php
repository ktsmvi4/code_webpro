<?php
require('condb.php');
$id = $_GET['id'];
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name_product = $_POST['name_product'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $date = $_POST['date'];

    $sql = "UPDATE `product` SET
     `name_product`='$name_product',
     `price`='$price',
     `category`='$category',
     `date`='$date'
      WHERE id = $id";

      mysqli_query($conn,$sql);
      header("Location: index.php");
      exit;
}
$result = mysqli_query($conn,"SELECT * FROM product WHERE id = '$id'");
$row = mysqli_fetch_assoc($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขรายการสินค้า</title>
</head>
<body>
    <h2>แก้ไขรายการสินค้า (ID : <?=$row['id']; ?>)</h2>

    <form action="edit.php?id=<?=$row['id'];?>" method="POST">

        <label>ชื่อสินค้า</label>
        <input type="text" name="name_product" value="<?=$row['name_product'];?>"><br><br>

        <label>ราคาสินค้า</label>
        <input type="number" name="price" value="<?=$row['price'];?>"><br><br>

        <label>ประเภทสินค้า</label>
        <select name="category" id="category" value="<?=$row['category'];?>">
            <option value="ประเภทเครื่องดื่ม">ประเภทเครื่องดื่ม</option>
            <option value="ประเภทเนื้อสัตว์">ประเภทเนื้อสัตว์</option>
            <option value="ประเภทอาหารแห้ง">ประเภทอาหารแห้ง</option>
            <option value="ประเภทหมดอายุไว">ประเภทหมดอายุไว</option>
            <option value="ประเภทอาหารสุขภาพ">ประเภทอาหารสุขภาพ</option>
            <option value="ประเภทอาหารสัตว์">ประเภทอาหารสัตว์</option>
            <option value="ประเภทของใช้ภายในบ้าน">ประเภทของใช้ภายในบ้าน</option>
            <option value="ประเภทสกินแคร์">ประเภทสกินแคร์</option>
        </select><br><br>

        <label>วันที่ขายสินค้า</label>
        <input type="date" name="date" required><br><br>

        <button type="submit">บันทึกรายการแก้ไขสินค้า</button>
    </form>
    <a href="index.php">กลับหน้าแรก</a>
</body>
</html>