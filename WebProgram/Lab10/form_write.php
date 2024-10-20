<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write to File</title>
</head>
<body>
<h2>Write to File</h2>
    <form method="post" action="">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>
        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the input values
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        
        // Create or open the file
        $file = fopen("myfile.txt", "a"); // 'a' mode for appending

        // Check if the file was opened successfully
        if ($file) {
            // Write the data to the file
            fwrite($file, "First Name: $firstname, Last Name: $lastname\n");
            fclose($file);
            echo "<p>Data written to myfile.txt successfully.</p>";
        } else {
            echo "<p>Error opening the file.</p>";
        }
    }
    ?>
</body>
</html>
