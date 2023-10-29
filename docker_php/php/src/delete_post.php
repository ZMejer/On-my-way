<?php
    include 'db_connect.php';
    include 'session.php';
    $conn = connect();
    
    if (isset($_POST['post_id'])) {
        $id = $_POST['post_id'];
        $sql = "DELETE FROM posts WHERE id='$id'";
        mysqli_query($conn, $sql);
    } else {
        echo "Post ID is not set.";
    }
    header('Location: my_posts.php')
    
?>