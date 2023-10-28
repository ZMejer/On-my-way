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
        <h1>Mój profil</h1>
            <div class="sidebar">
                <p><a href="">Ranking</a></p>
                <p><a href="">Moje profity</a></p>
                <p><a href="">Historia zleceń</a></p>
            </div>
            <div class="content">
                <label for="email">Adres E-mail</label>
                <input type="text" id="email" placeholder="gracjan@gmail.com">
                
                <label for="address">Adres zamieszkania</label>
                <input type="text" id="address" placeholder="Adres zamieszkania">
                
                <label for="pass">Hasło</label>
                <input type="password" id="pass" placeholder="gracjan@gmail.com">
                <div id="group_submit">
                    <input type="submit" id="send_changes" value="Zatwierdz zmiany"></input>
                    <input type="submit" id="account_delete" value="Usuń konto"></input>
                </div>
            </div>
    </div>

</body>

</html>