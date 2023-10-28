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

    $query = "SELECT * FROM users";
    
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Błąd zapytania: " . mysqli_error($conn));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        #echo $row['name']." "; 
    }

    mysqli_close($conn);
}
?>
