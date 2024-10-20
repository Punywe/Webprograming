<?php
    function changeyesr(){
        $now = getdate();
        $year = $now['year'] + 543 ;
        return $year ;

    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $now = getdate();
    if (isset($_POST["Fname"]) && isset($_POST["Lname"])) {
        $fname = htmlspecialchars($_POST["Fname"]);
        $lname = htmlspecialchars($_POST["Lname"]);
        
        echo "My name is " . $fname . " " . $lname . "<br>"."<br>";  // เพิ่ม <br> เพื่อให้แยกบรรทัด
    } else {
        echo "No data received.<br>"; 
    }

    if (isset($_POST["Pwd"])) {
        $pwd = htmlspecialchars($_POST["Pwd"]);
        echo "Password: " . $pwd . "<br>"."<br>";
    }

    if (isset($_POST["age"])) {
        $age = htmlspecialchars($_POST["age"]);
        if (is_numeric($age)) {  // ใช้ is_numeric() เพื่อตรวจสอบว่าเป็นตัวเลขหรือไม่
            echo "Age: " . $age . "<br>"."<br>";
        } else {
            echo "Invalid age value.<br>";
        }
    }

    if(isset($_POST['gender'])){
        $ge = htmlspecialchars($_POST['gender']);
        echo "Gender : " .$ge . "<br>"."<br>";
    }

    if(isset($_POST['province'])){
        $pr = htmlspecialchars($_POST['province']);
        echo "Your province is : " .$pr ."<br>"."<br>" ;
    }



    echo "Date to submit : " .$now['mday'] ." " .$now['month'] ." ";
    echo changeyesr() ;

}
?>