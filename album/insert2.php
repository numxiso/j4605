<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลสินค้า</title>
</head>

<body>
<h1>ฟอร์มเพิ่มข้อมูลสินค้า</h1>

<form method="post" action="" enctype="multipart/form-data">
    ชื่อสินค้า
    <input type="text" name="pname" required autofocus> <br>
    ราคา 
    <input type="number" name="pprice" required> <br>
    รายละเอียดสินค้า
    <textarea name="pdetail" required></textarea><br>
    หมวดหมู่สินค้า (รหัส)
    <input type="number" name="cid" required> <br>
    รูปภาพสินค้า
    <input type="file" name="pimage" accept="image/jpeg" required> <br>
    <button type="submit">บันทึก</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once("../connectdb.php");

    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pdetail = $_POST['pdetail'];
    $cid = $_POST['cid'];

    // ตรวจสอบว่าอัปโหลดรูปภาพสำเร็จ
    if (isset($_FILES['pimage']) && $_FILES['pimage']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['pimage']['tmp_name'];
        $fileType = mime_content_type($fileTmpPath);

        // ตรวจสอบว่าไฟล์เป็น JPG
        if ($fileType === 'image/jpeg') {
            // เพิ่มข้อมูลสินค้าในฐานข้อมูล
            $sql = "INSERT INTO products (p_name, p_detail, p_price, p_ext, c_id) VALUES ('{$pname}', '{$pdetail}', '{$pprice}', 'jpg', '{$cid}')";
            if (mysqli_query($conn, $sql)) {
                $lastId = mysqli_insert_id($conn); // รับค่า ID ของสินค้าที่เพิ่มล่าสุด
                $newFileName = "../images/" . $lastId . ".jpg";

                // ย้ายไฟล์ไปยังโฟลเดอร์ปลายทาง
                if (move_uploaded_file($fileTmpPath, $newFileName)) {
                    echo "<script>alert('บันทึกข้อมูลสำเร็จ!');</script>";
                } else {
                    // ลบข้อมูลในฐานข้อมูลหากอัปโหลดรูปภาพล้มเหลว
                    mysqli_query($conn, "DELETE FROM products WHERE p_id = {$lastId}");
                    echo "<script>alert('เกิดข้อผิดพลาดในการอัปโหลดรูปภาพ');</script>";
                }
            } else {
                echo "<script>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูลสินค้า');</script>";
            }
        } else {
            echo "<script>alert('รองรับเฉพาะไฟล์ JPG เท่านั้น');</script>";
        }
    } else {
        echo "<script>alert('กรุณาอัปโหลดรูปภาพสินค้า');</script>";
    }
}
?>

</body>
</html>