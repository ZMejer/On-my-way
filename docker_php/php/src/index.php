<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  include 'db_connect.php' ?>
</head>
<body>
<?php
$txt = "PHP";
echo "I love $txt!";
?>
    <?php
    $servername = "db";
    $username = "root";
    $password = "root";

    $conn = mysqli_connect($servername, $username, $password,);

    if (!$conn) {
        die('Could not connect: ' . mysqli_error());
    }else{
        echo 'Connected successfully';

    }
    ?>
</body>
</html>