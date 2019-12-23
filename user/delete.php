<?php


include '../config/connect.php';

$ID = $_GET['id'];

$delete = "DELETE FROM users WHERE id='$ID'";

mysqli_query($connect, $delete);

header('location:index.php');


?>	