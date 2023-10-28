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
        <form method="POST" action="login.php" class="login-form">
        <span style="float:left;">Nie masz jeszcze konta? <a href="registration_form.php">Zarejestruj się</a></span>
        <a class="go-back-btn" id="go-back-btn-login" href="index.php"><img src="./assets/arrow.png"><span>Wróć</span></a>
        <br style="clear:both;" />
        <div style="float:left; margin-top:3em;">
            <label for="login">Login</label>
            <input type="text" name="login" id="login">
        </div>
        <div style="float:left;">
            <label for="password">Hasło</label>
            <input type="password" name="password" id="password">
        </div><br style="clear:both;">
        <input type="submit" value="Utwórz konto" name="submit-btn" id="submit-btn-login">
        </form>
    </div>
    <div class="decoration" style="float:left;">
        <img id="house-img" src="./assets/house.png">
    </div>
</body>
</html>