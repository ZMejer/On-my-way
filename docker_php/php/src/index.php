<?php include 'db_connect.php' ?>
<?php include 'session.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po drodze</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="icon" type="image/x-icon" href="/assets/logo.ico"> <!-- tego pliku narazie nie ma -->
</head>
<body>
    <div class="navbar">
        <img id="logo-img" alt="logo" src="./assets/logo.png">
        <ul class="navbar-items">
            <a href="index.php"><p id="main" class="active">STRONA GŁÓWNA</p></a>
            <?php navbar_items(); ?>
            <a href="contact.php"><p id="contact">KONTAKT</p></a>
            <a href="faq.php"><p id="faq">FAQ</p></a>
            <?php logout_button(); ?>
        </ul>
    </div>
    <div class="banner">
        <div id="banner-text">
            <h1>
                Łączymy ludzi, realizujemy zadania. <br>
                Dzisiaj pomagasz Ty, jutro ktoś pomoże Tobie
            </h1>
            <a href="login_form.php"><button class="banner-btn" id="login-btn">Logowanie</button></a>
            <a href="registration_form.php"><button class="banner-btn" id="registration-btn">Rejestracja</button></a>
        </div>
        <img id="banner-img" alt="banner" src="./assets/baner.png">
    </div>
</body>
</html>