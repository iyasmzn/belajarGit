<?php

include '../config/connect.php';

$id 	= $_POST['id'];
$nama 	= $_POST['name'];
$email 	= $_POST['email'];
$pass 	= $_POST['password'];

$data   = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($connect, $data);
$row    = mysqli_fetch_row($result);
$pas    = $row[3];
if (!$pass || empty($pass)) {
    $pass = $pas;
}
else {
    $pass = md5($_POST['password']);
}

$edit   = "UPDATE users SET name = '$nama', email = '$email', password = '$pass' WHERE id = '$id' ";

mysqli_query($connect, $edit);
header('location:index.php');
?>