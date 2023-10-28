<?php
session_start();
    if(isset($_SESSION['id'])){
        function navbar_items(){
            $url = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            if ($url == "http://localhost/profile.php" or $url == "http://localhost/tasks_history.php"){
                $profile_class = "active";
                $posts_class = "";
            }
            else if($url ==  "http://localhost/posts.php"){
                $profile_class = "";
                $posts_class = "active";
            }
            else {
                $profile_class = "";
                $posts_class = "";
            }
            echo "<a href='profile.php'><p id='profile' class='".$profile_class."'>MÓJ PROFIL</p></a>";
            echo "<a href='posts.php'><p id='posts' class='".$posts_class."'>OGŁOSZENIA</p></a>";
        }
        function logout_button(){
            echo "<a><p><form method='POST' action='logout.php'><input class='logout-btn' type='submit' value='Wyloguj się'></form></p></a>";
        }
    }
    else {
        function navbar_items(){
            echo "";
        }
        function logout_button(){
            echo "";
        }
    }
?>