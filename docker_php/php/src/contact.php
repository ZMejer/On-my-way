<?php include 'session.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Po drodze</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/x-icon" href="/assets/logo.ico"> <!-- tego pliku narazie nie ma -->
</head>
<body>
    <div class="navbar">
        <img id="logo-img" alt="logo" src="./assets/logo.png">
        <ul class="navbar-items">
            <a href="index.php"><p id="main">STRONA GŁÓWNA</p></a>
            <?php navbar_items(); ?>
            <a href="contact.php"><p id="contact" class="active">KONTAKT</p></a>
            <a href="faq.php"><p id="faq">FAQ</p></a>
            <?php logout_button(); ?>
        </ul>
    </div>
    <div class="contact-container">
        <div class="contact-content">
            <form class="contact-form">
                <label for='name'>Imię</label>
                <input type='text' id='name' name='name' placeholder="Imię"></input>
                <label for='email1'>E-mail</label>
                <input type='email' id='email1' name='email1' placeholder="E-mail"></input>
                <label for='message'>Wiadomość</label>
                <input type='text' id='message' name='message' placeholder="Wiadomość"></input>
                <button style='margin-bottom:1em;' type='submit' id='send-btn'>Wyślij</button>
                <text style="color:#666666;">Wyślij wiadomość, a my skontaktujemy się z Tobą <br> najszybciej, jak to możliwe.</text>

            </form>
        </div>
    </div>
</body>
</html>