<?php
include 'session.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po drodze</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="/assets/logo.ico"> <!-- tego pliku narazie nie ma -->
    <?php include 'db_connect.php' ?>
</head>

<body>
    <div class="navbar">
        <img id="logo-img" alt="logo" src="./assets/logo.png">
        <ul class="navbar-items">
            <a href="index.php">
                <p id="main">STRONA GŁÓWNA</p>
            </a>
            <?php navbar_items(); ?>
            <a href="contact.php">
                <p id="contact">KONTAKT</p>
            </a>
            <a href="faq.php">
                <p id="faq">FAQ</p>
            </a>
            <?php logout_button(); ?>
        </ul>
    </div>
    <div class="flex-row">
        <h1>Historia zleceń</h1>
            <div class="sidebar">
                <p><a href="">Ranking</a></p>
                <p><a href="">Moje profity</a></p>
                <p><a href="profile.php">Mój profil</a></p>
            </div>
            <div class="content">
                
            </div>
    </div>

</body>

</html>