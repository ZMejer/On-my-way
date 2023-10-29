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
<div class="main-container">
    <main>
        <div class="header">
            <form method="POST" action="add_post_form.php">
                <input type="submit" class="search-bar" id="add-post" value="Dodaj ogłoszenie">
            </form>
            <form method="POST" action="my_posts.php">
                <input style="margin-left:3em;" type="submit" class="search-bar" id="add-post" value="Moje ogłoszenia">
            </form>
        </div>
        <?php
            $conn = connect();
            $sql = "SELECT * FROM posts";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='announcement'>";
                    echo "<div class='announcement-detail'>";
                    $user_id = $row['user_id'];
                    $user_info_sql = "SELECT name, city, address from users WHERE id='$user_id'";
                    $user_info_result = mysqli_query($conn, $user_info_sql);
                    if ($user_info_result) {
                        $user_info = mysqli_fetch_assoc($user_info_result);
                        echo "<text>" . $user_info['name'] . ", </text>";
                        echo "<text>" . $user_info['city'] . ", " . $user_info['address'] . "</text>";
                        echo "<h3>" . $row['need'] . "</h3>";
                        echo "<p>" . $row['problem'] . "</p>";
                        if($row['is_completed'] == 0) {
                            echo "<em> Status: Nierozwiązano </em>";
                        }
                        else {
                            echo "<em> Status: Rozwiązano </em>";
                        }
                    } else {
                        echo "";
                    }
                    echo "</div>";
                    echo "<button class='edit-btn'>Pomagam</button>";

                    echo "</div>";
                }
            } else {
                echo "<h3 class=\"text1\">Obecnie brak ogłoszeń.</h3>";
            }            
        ?>
    </main>
</div>
</body>

</html>