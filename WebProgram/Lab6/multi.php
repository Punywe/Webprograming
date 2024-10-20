<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <?php
        $start = 23; // กำหนดค่าของตัวเลขที่ต้องการแสดงแม่สูตรคูณ
        echo "<h1>Multiplication Table for $start</h1>";
        
        $i = 1; // เริ่มต้นตัวคูณที่ 1

        do {
            $sum = $start * $i; // คำนวณผลลัพธ์ของการคูณ
            echo "$start x $i = $sum <br>"; // แสดงผลลัพธ์
            $i++; // เพิ่มค่าของตัวคูณ
        } while ($i <= 12); // ทำซ้ำจนกว่าตัวคูณจะถึง 12
    ?>
</body>
</html>
