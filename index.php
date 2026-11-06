<?php
require('condb.php');
$result = mysqli_query($conn,"SELECT * FROM product ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงรายการสินค้า</title>
</head>
<body>
    <h2>รายการสินค้า</h2>
    <a href="form.php">เพิ่มรายการสินค้า</a>
    <table border="1">
        <thead>
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อสินค้า</td>
                <td>ราคาสินค้า</td>
                <td>ประเภทสินค้า</td>
                <td>วันที่ขาย</td>
            </tr>
        </thead>
        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)):?>
                <tr>
                    <td><?=$row['id'];?></td>
                    <td><?=$row['name_product'];?></td>
                    <td><?=$row['price'];?></td>
                    <td><?=$row['category'];?></td>
                    <td><?=$row['date'];?></td>
                    <td>
                        <a href="edit.php?id=<?=$row['id'];?>">แก้ไขรายการสินค้า</a>
                        <a href="delete.php?id=<?=$row['id'];?>" onclick="return confirm('ยืนยันการลบ');">ลบรายการสินค้า</a>
                    
                    </td>
                </tr>
                <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>