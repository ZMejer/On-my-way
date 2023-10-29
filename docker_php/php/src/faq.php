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
            <a href="contact.php"><p id="contact">KONTAKT</p></a>
            <a href="faq.php"><p id="faq" class="active">FAQ</p></a>
            <?php logout_button(); ?>
        </ul>
    </div>
    <div class="faq-container">
        <div class="faq-inner-container"> 
        <h1><b>Często zadawane pytania</b></h1>
            <span class="text-bold">Jak mogę zarejestrować się na platformie?</span><br style="clear:both;">
            <span>Aby zarejestrować się, wystarczy przejść na naszą stronę główną i kliknąć przycisk "Zarejestruj się". Następnie podążaj za krokami rejestracji, podając wymagane informacje, takie jak e-mail i hasło. </span><br><br>
            <span class="text-bold">Czy korzystanie z platformy jest bezpłatne?</span><br>
            <span>Tak, korzystanie z naszej platformy jest całkowicie bezpłatne zarówno dla osób niepełnosprawnych, jak i wolontariuszy.</span><br><br>
            <span class="text-bold">Jak mogę zgłosić potrzebę pomocy?</span><br>
            <span>Po zalogowaniu na swoje konto, możesz kliknąć przycisk "Dodaj ogłoszenie" i wypełnić formularz, opisując, czym potrzebujesz pomocy. Wprowadź jak najwięcej szczegółów, aby wolontariusze mogli lepiej zrozumieć Twoje potrzeby.</span><br><br>
            <span class="text-bold">Jak jest zapewnione bezpieczeństwo na platformie?</span><br>
            <span>Dbamy o bezpieczeństwo naszych użytkowników. Wolontariusze przechodzą weryfikację, a my zachęcamy do korzystania z systemu ocen i opinii. Zawsze warto spotykać się w publicznych miejscach i zachować ostrożność.</span><br><br>
            <span class="text-bold">Jakie rodzaje zleceń są dostępne na platformie?</span><br>
            <span>Na naszej platformie znajdziesz różnorodne zlecenia, takie jak zakupy, wyprowadzanie psa na smyczy czy odśnieżanie.</span><br><br>
            <span class="text-bold">Czy mogę zaoferować pomoc regularnie?</span><br>
            <span>Oczywiście! Możesz stać się regularnym wolontariuszem i pomagać regularnie, budując dłuższe relacje z osobami potrzebującymi.</span><br><br>
            <span class="text-bold">Jak mogę kontaktować się z zespołem wsparcia?</span><br>
            <span>Jeśli masz pytania lub potrzebujesz pomocy, skorzystaj z zakładki "Kontakt" na naszej stronie lub napisz na nasz adres e-mail [adres e-mail wsparcia].</span><br><br>
        </div>
    </div>
</body>
</html>