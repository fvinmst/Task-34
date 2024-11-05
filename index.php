<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "task34";

    $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="insert.php" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="" required><br><br
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value="" required><br><br
            <label for="message">Message:</label><br>
            <textarea id="message" name="message" value="" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>