<?php
session_start();
// unset($_SESSION['email']);
// unset($_SESSION['password']);
session_destroy();

echo "You have log out!!";
header('refresh:2;URL = http://localhost/git/github/belajarGit/index.php');
?>