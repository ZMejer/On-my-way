<?php
include 'db_connect.php';
function login()
{
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
        $correct_data = True;
    }
    else {
        $correct_data = False;
    }
}

login();
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
    <h1>
        <?php
            if($correct_data){
                echo "Udało się zalogować. Witaj ".$_SESSION['login'];
            }
            else {
                echo "Nie udało się zalogować";
            }
        ?>
    </h1>
</body>
</html>