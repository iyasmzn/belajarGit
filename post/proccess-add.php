<?php 
include '../config/connect.php';
$author		= $_POST['author'];
$title		= $_POST['title'];
$content	= $_POST['content'];
$stat		  = $_POST['status'];

$add 			= "INSERT INTO post (author, title, content, status) VALUES ('$author', '$title', '$content', '$stat')"; 
mysqli_query($connect, $add);
header('location:index.php');
?>