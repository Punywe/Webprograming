<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <style>
        .large-text {
            font-size: 24px; /* ปรับขนาดตัวอักษรให้ใหญ่ขึ้น */
            font-weight: bold; /* ทำให้ตัวอักษรหนาขึ้น */
        }
    </style>
</head>
<body>
    <?php
        $now = getdate();
        echo "<div class='large-text'>Date: " . $now['mday'] . "/" . $now['mon'] . "/" . $now['year'] . "<br>";
        echo "Time: " . $now['hours'] . ":" . str_pad($now['minutes'], 2, '0', STR_PAD_LEFT) . ":" . str_pad($now['seconds'], 2, '0', STR_PAD_LEFT) . "</div>";
    ?>
    <form method="post" action="index2.php">
        <fieldset>
            <legend>Personal Information</legend>

            <label for="fname">First name:</label>
            <input type="text" id="fname" name="Fname" placeholder="Enter your first name" required><br><br>

            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="Lname" placeholder="Enter your last name" required><br><br>

            <label for="pwd">Password:</label>
            <input type="password" id="pwd" name="Pwd" placeholder="Enter your password" required><br><br>

            <label for="num">Age:</label>
            <input type="number" id="num" name="age" value="0" min="0" max="100" required><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br><br>

            <label for="province">Province:</label>
            <select id="province" name="province" required>
                <option value="" disabled selected>Select your province</option>
                <option value="bangkok">Bangkok</option>
                <option value="chiangmai">Chiang Mai</option>
                <option value="phuket">Phuket</option>
                <option value="khonkaen">Khon Kaen</option>
                <!-- สามารถเพิ่มจังหวัดอื่นๆ ได้ตามต้องการ -->
            </select><br><br>

            <input type="submit" name="SM" value="OK">
        </fieldset>
    </form> 
</body>
</html>


