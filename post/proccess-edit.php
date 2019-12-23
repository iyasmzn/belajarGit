<?php 
include '../config/connect.php';
$ID 			=	$_POST['id'];
$author		= $_POST['author'];
$title		= $_POST['title'];
$content	= $_POST['content'];
$stat			= $_POST['status'];

$edit 			= "UPDATE post SET author='$author',title='$title',content='$content',status='$stat' WHERE id='$ID'"; 
mysqli_query($connect, $edit);
header('location:index.php');
?>