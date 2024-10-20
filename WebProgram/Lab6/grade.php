<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Display</title>
    <style>
        .grade {
            padding: 5px;
            border-radius: 5px;
            color: white;
        }
        .green { background-color: #4CAF50; } /* สีเขียวสำหรับเกรด A, B+, B */
        .yellow { background-color: #FFEB3B; color: black; } /* สีเหลืองสำหรับเกรด C+, C, D+, D */
        .red { background-color: #F44336; } /* สีแดงสำหรับเกรด F */
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php
        // กำหนดค่าคะแนนที่ต้องการตรวจสอบ
        $score = 75; // สามารถเปลี่ยนค่าคะแนนได้ตามต้องการ
        $grade = "";
        $gradeClass = "";

        // ใช้คำสั่ง if...else เพื่อกำหนดเกรดและสีพื้นหลังของตัวอักษร
        if ($score >= 80) {
            $grade = "A";
            $gradeClass = "green";
        } elseif ($score >= 75) {
            $grade = "B+";
            $gradeClass = "green";
        } elseif ($score >= 70) {
            $grade = "B";
            $gradeClass = "green";
        } elseif ($score >= 65) {
            $grade = "C+";
            $gradeClass = "yellow";
        } elseif ($score >= 60) {
            $grade = "C";
            $gradeClass = "yellow";
        } elseif ($score >= 55) {
            $grade = "D+";
            $gradeClass = "yellow";
        } elseif ($score >= 50) {
            $grade = "D";
            $gradeClass = "yellow";
        } else {
            $grade = "F";
            $gradeClass = "red";
        }
    ?>

    <!-- ตารางแสดงระดับคะแนน -->
    <table>
        <tr>
            <th>ระดับคะแนน (เกรด)</th>
            <th>คะแนน</th>
        </tr>
        <tr>
            <td class="green">A</td>
            <td class="green">80 คะแนนขึ้นไป</td>
        </tr>
        <tr>
            <td class="green">B+</td>
            <td class="green">75 - 79 คะแนน</td>
        </tr>
        <tr>
            <td class="green">B</td>
            <td class="green">70 - 74 คะแนน</td>
        </tr>
        <tr>
            <td class="yellow">C+</td>
            <td class="yellow">65 - 69 คะแนน</td>
        </tr>
        <tr>
            <td class="yellow">C</td>
            <td class="yellow">60 - 64 คะแนน</td>
        </tr>
        <tr>
            <td class="yellow">D+</td>
            <td class="yellow">55 - 59 คะแนน</td>
        </tr>
        <tr>
            <td class="yellow">D</td>
            <td class="yellow">50 - 54 คะแนน</td>
        </tr>
        <tr>
            <td class="red">F</td>
            <td class="red">0 - 49 คะแนน</td>
        </tr>
    </table>

    <!-- ตารางแสดงคะแนนและเกรดที่ได้รับ -->
    <table>
        <tr>
            <th>Score</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td><?php echo $score; ?></td>
            <td><span class="grade <?php echo $gradeClass; ?>"><?php echo $grade; ?></span></td>
        </tr>
    </table>
</body>
</html>
