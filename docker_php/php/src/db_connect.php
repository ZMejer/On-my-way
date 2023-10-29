<?php
function connect(){
    $servername = "db";
    $username = "root";
    $password = "root";
    $database = "on_my_way";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
    }
    return $conn;
}
?>
