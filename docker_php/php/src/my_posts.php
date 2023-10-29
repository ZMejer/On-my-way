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
    <div class="my-posts" style="float:left;">
    <div class="login-form">
        <a class="go-back-btn" id="go-back-btn-login" href="posts.php"><img src="./assets/arrow.png"><span>Wróć</span></a>
        <br style="clear:both;" />
    <?php
        $conn = connect();
        $sql = "SELECT * FROM posts";
        $result = mysqli_query($conn, $sql);
        $posts_counter = 0;
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $user_id = $row['user_id'];
                if($user_id == $_SESSION['id']){
                    $posts_counter += 1;
                    $user_info_sql = "SELECT name, city, address from users WHERE id='$user_id'";
                    $user_info_result = mysqli_query($conn, $user_info_sql);
                    if ($user_info_result) {
                        $user_info = mysqli_fetch_assoc($user_info_result);
                        echo "<div class='my_post'>";
                        echo "<h3 style='margin-left:5em;'>" . $row['need'] . "</h3>";
                        echo "<p style='margin-left:5em;'>" . $row['problem'] . "</p>";
                        if($row['is_completed'] == 0) {
                            echo "<em style='margin-left:5em;'> Status: Nierozwiązano </em>";
                        }
                        else {
                            echo "<em style='margin-left:5em;'> Status: Rozwiązano </em>";
                        }
                        echo "<br style='clear:both;'>
                        <form style='margin-left:5em;' method='POST' action='delete_post.php'>
                        <input type='hidden' name='post_id' value='" . $row['id'] . "'>
                        <button type='submit' class='delete-btn'>Usuń</button>
                        </form>
                        </div>";

                    } else {
                        echo "";
                    }
                }
                else {
                    echo "";
                }
            }
        }
        if($posts_counter == 0){
            echo "<text style='margin-top:6em;'>Obecnie nie posiadasz żadnych ogłoszeń.</text>";
        }
    ?>
    </div>
    </div>
    <div class="decoration" style="float:left;">
        <img id="house-img" src="./assets/house.png">
    </div>
</body>
</html>