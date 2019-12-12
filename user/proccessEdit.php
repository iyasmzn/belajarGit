<?php

include '../connection/connect.php';

$id 	= $_POST['id'];
$nama 	= $_POST['name'];
$email 	= $_POST['email'];
$pass 	= $_POST['password'];

$add = "UPDATE users SET name = '$nama', email = '$email', password = '$pass' WHERE id = '$id' ";

mysqli_query($connect, $add);
header('location:index.php');
?>