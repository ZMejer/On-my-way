<?php
include 'db_connect.php';
function login() {
    $conn = connect();
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $city = $_POST['city'];
    $address = $_POST['address'];
    $sql = "INSERT INTO users VALUES (null, '$name', '$surname', '$email', '$login', '$password', '$city', '$address')";
        if (mysqli_query($conn, $sql)) {
            $url = $_SERVER['HTTP_REFERER'];
            header("Location: $url");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
}

login();


?>