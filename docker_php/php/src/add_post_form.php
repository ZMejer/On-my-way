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
    <div class="form" style="float:left;">
        <form method="POST" action="add_post.php" class="login-form">
        <a class="go-back-btn" id="go-back-btn-login" href="posts.php"><img src="./assets/arrow.png"><span>Wróć</span></a>
        <br style="clear:both;" />
        <div style="float:left; margin-top:3em;">
            <label for="problem">Co tobie dolega?</label>
            <input type="text" name="problem" id="problem">
        </div>
        <div style="float:left;">
            <label for="need">Czego potrzebujesz?</label>
            <input type="text" name="need" id="need">
        </div><br style="clear:both;">
        <input type="submit" value="Dodaj zgłoszenie" name="submit-btn" id="submit-btn-login">
        </form>
    </div>
    <div class="decoration" style="float:left;">
        <img id="house-img" src="./assets/house.png">
    </div>
</body>
</html>