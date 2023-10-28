<?php
include 'db_connect.php';

    $conn = connect();
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['city'] = $row['city'];
        $_SESSION['address'] = $row['address'];
        header('Location: ' . 'index.php');
    }
    else {
        function login_info(){
            echo "<h1 class='login-info'>Wprowadzone dane są nieprawidłowe.</h1>";
        }
        function login_info_button(){
            echo "<a href='login_form.php'><button class='btn'>Wróć do logowania</button></a>";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po drodze</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="login-info-container login-info-text">
    <?php
        login_info();
    ?>
    </div>
    <div class="login-info-container">
    <?php
        login_info_button();
    ?>
    </div>
</body>
</html>