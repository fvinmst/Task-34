<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
</head>
<body>
    <?php
        //hostname => localhost
        //username => root
        //password =>
        //database name => task34
        $conn = mysqli_connect("localhost", "root", "", "task34");
        //check conn
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $sql = "INSERT INTO contact VALUES('', '$name', '$email', '$message')";
        if (mysqli_query($conn, $sql)) {
            echo "successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        
        //close conn
        mysqli_close($conn);
    ?>
</body>
</html>