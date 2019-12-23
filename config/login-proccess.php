<?php
session_start();
include 'connect.php';
$email		=	$_POST['email'];
$pass		=	md5($_POST['password']);

if (!empty($email) && !empty($pass)) {
	$quer	=	"SELECT * FROM users WHERE email ='$email' AND password='$pass'";
	$res	=	mysqli_query($connect, $quer);
	if (mysqli_num_rows($res)) {
		$row 	=	mysqli_fetch_assoc($res);
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
		header('location:../home/index.php');	
	}
	else { 
		echo "WRONG PASSWORD!!!";
		header('refresh:2;URL = ../index.php'); 
	}
}
else {
	echo "EMPTY!!!";
	header('refresh:2;URL = ../index.php'); 
}
