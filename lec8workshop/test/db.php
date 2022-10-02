<?php
// 1. ติดต่อฐานข้อมูล
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 2. กำหนดรูปแบบคำสั่ง SQL
$stmt = $pdo->prepare("SELECT * FROM product");

// 3. ประมวลผลคำสั่ง SQL
$stmt->execute();

// 4. วนลูปดึงผลลัพธ์
while ($row = $stmt->fetch()) { // ดึงข ้อมูลทีละแถวเก็บไว ้ใน $row
echo "<pre>";
print_r($row); // คำสั่งแสดงค่าในอาร์เรย์
echo "</pre>";
}
?>