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
    <main>
        <div class="header">
            <input class="search-bar" type="text" placeholder="Szukaj...">
            <button class="search-bar" id="add-post">Dodaj Ogłoszenie</button>
        </div>
        <div class="announcement">
            <div class="announcement-detail">
                <text>Gracjan, 21 lat</text>
                <text>Kołobrzeg, Kwiatowa 10</text>
                <h3>Pomoc w kupnie 1 zgrzewki wody</h3>
                <p>Jestem po operacji kolana. Mam utrudnione chodzenie</p>
                <em>Status: Nierozwiązano</em>
            </div>
            <button class="edit-btn">Pomagam</button>
        </div>
        <div class="announcement">
            <div class="announcement-detail">
                <p>Gracjan, 21 lat</p>
                <span>Kołobrzeg, Rybacka 8e</span>
                <h3>Wyprowadzenie psa</h3>
                <p>Jestem po operacji kolana. Mam utrudnione poruszanie</p>
                <em>Status: Nierozwiązano</em>
            </div>
            <button class="edit-btn">Pomagam</button>
        </div>
    </main>
</body>

</html>