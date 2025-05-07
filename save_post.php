<?php
    require 'db.php';

    $title = $_POST['title'];
    $content = $_POST['content'];

$stmt = $conn->prepare("INSERT INTO posts (title, content, imagen) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $content, $imagen);
$stmt->execute();


$stmt->close();
$conn->close();

header("Location: post.php");
exit();
?>
