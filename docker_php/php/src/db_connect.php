<?php
function connect(){
    $servername = "localhost";
    $username = "username";
    $password = "password";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die('Could not connect: ' . mysqli_error());
    }

    echo 'Connected successfully';
    mysql_close($conn);
}

?>