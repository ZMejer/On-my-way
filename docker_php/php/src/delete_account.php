<?php
    include 'db_connect.php';
    session_start();
    $conn = connect();
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $sql = "DELETE FROM posts WHERE user_id='$id'";
        mysqli_query($conn, $sql);
        $sql = "DELETE FROM users WHERE id='$id'";
        mysqli_query($conn, $sql);
        session_unset();
        session_destroy();
        $_SESSION = array();
        header('Location: index.php');
    }
    header('Location: ' . 'index.php');
?>
