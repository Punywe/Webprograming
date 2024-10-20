<?php
session_start();

// เชื่อมต่อฐานข้อมูล
$host = "localhost"; // ชื่อโฮสต์
$dbname = "mystore"; // ชื่อฐานข้อมูล
$username = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password = "1234"; // รหัสผ่านฐานข้อมูล

$conn = mysqli_connect($host, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
}

// ตรวจสอบว่ามีการส่งข้อมูลจากฟอร์มหรือไม่
if (isset($_POST["username"]) && isset($_POST["password"])) {
    // เตรียมคำสั่ง SQL เพื่อดึงข้อมูลผู้ใช้
    $query = "SELECT * FROM customer WHERE username = ? AND password = ?";
    
    // ใช้ prepare statement เพื่อป้องกัน SQL injection
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $_POST["username"], $_POST["password"]);
    mysqli_stmt_execute($stmt);
    
    // เก็บผลลัพธ์
    $result = mysqli_stmt_get_result($stmt);
    
    // ตรวจสอบว่าพบผู้ใช้หรือไม่
    if (mysqli_num_rows($result) > 0) {
        // ผู้ใช้ล็อกอินสำเร็จ
        $row = mysqli_fetch_assoc($result); // ดึงข้อมูลผู้ใช้
        
        // ตั้งค่าเซสชันสำหรับชื่อผู้ใช้, ชื่อจริง, และนามสกุล
        $_SESSION["User"] = $row["username"]; // ชื่อผู้ใช้
        $_SESSION["UserName"] = $row["Customer_Name"]; // ชื่อจริง
        $_SESSION["UserLastname"] = $row["Customer_Lastname"]; // นามสกุล
        
        header("Location: show_customer.php");
        exit(); // หยุดการทำงานของสคริปต์หลังจากส่งการเปลี่ยนเส้นทาง
    }
    

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_stmt_close($stmt);
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <?php
    // แสดงข้อความผิดพลาดถ้ามี
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</body>
</html>
