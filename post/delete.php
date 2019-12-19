<?php 
include '../connection/connect.php';
$ID 		=	$_GET['id'];
$delete = "DELETE FROM post WHERE id='$ID'";
mysqli_query($connect, $delete);
header('location:index.php');
?>