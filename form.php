<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มเพิ่มรายการสินค้า</title>
</head>
<body>
    <h2>เพิ่มรายการสินค้า</h2>
    <form action="insert.php" method="POST">
        <label>ชื่อสินค้า</label>
        <input type="text" name="name_product" required><br><br>
        <label>ราคาสินค้า</label>
        <input type="number" name="price" required><br><br>
        <label>ประเภทสินค้า</label>
        <select name="category" id="category">
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

        <button type="submit">บันทึกรายการสินค้า</button>
    </form>
</body>
</html>