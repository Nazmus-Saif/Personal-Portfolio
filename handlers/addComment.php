<?php 
    include '../database/database.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $insertQuery = $conn->prepare("INSERT INTO comments (commenter, comment_text) VALUES (?,?)");
        $insertQuery->bind_param("ss",$name, $comment);
        if ($insertQuery->execute()) {
            header("Location: ../index.php");
            exit;
        } else {
            header("Location: ../index.php");
            exit;
        }
    }
?>