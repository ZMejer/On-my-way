<?php 
    include 'db_connect.php';
    include 'session.php';
     $conn = connect();
     $problem = $_POST['problem'];
     $need = $_POST['need'];
     $user_id = $_SESSION['id'];
     $sql = "INSERT INTO posts VALUES (null, '$user_id', '$problem', '$need', '0')";
         if (mysqli_query($conn, $sql)) {
             $url = 'posts.php';
             header("Location: $url");
         } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
?>