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
    <div class="form" style="float:left;">
        <form method="POST" action="registration.php" class="registration-form">
            <span style="float:left;">Jesteś już użytkownikiem? <a href="login_form.php">Zaloguj się</a></span>
            <a class="go-back-btn" href="index.php"><img src="./assets/arrow.png"><span>Wróć</span></a>
            <br style="clear:both;" />
            <div style="float:left;">
                <label for="name">Imię</label>
                <input type="text" name="name" id="name">
            </div>
            <div style="float:left;">
                <label for="name">Nazwisko</label>
                <input type="text" name="surname" id="surname">
            </div>
            <br style="clear:both;" />
            <div style="float:left">
                <label for="email">Adres E-mail</label>
                <input type="email" name="email" id="email">
            </div> 
            <br style="clear:both;" />
            <div style="float:left;">
                <label for="login">Nazwa użytkownika</label>
                <input type="text" name="login" id="login" style="float: left;">
            </div>
            <div style="float:left;">
                <label for="password">Hasło</label>
                <input type="password" name="password" id="password">
            </div>
            <br style="clear:both;" />
            <div style="float:left;">
                <label for="city">Miasto</label>
                <input type="text" name="city" id="city" style="float: left;">
            </div>
            <div style="float:left;">
                <label for="address">Adres</label>
                <input type="text" name="address" id="address"><br><br>
            </div>
            <br style="clear:both;" />
            <input type="submit" value="Utwórz konto" name="submit-btn" id="submit-btn">
        </form>
    </div>
    <div class="decoration" style="float:left;">
        <img id="house-img" src="./assets/house.png">
    </div>
</body>
</html>