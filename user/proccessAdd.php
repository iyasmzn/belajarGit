<?php

include '../connection/connect.php';

$nama 	= $_POST['name'];
$email 	= $_POST['email'];
$pass 	= $_POST['password'];

$add = "INSERT INTO users ( name, email, password ) VALUES ('$nama', '$email', '$pass')";

mysqli_query($connect, $add);
header('location:index.php');
?>