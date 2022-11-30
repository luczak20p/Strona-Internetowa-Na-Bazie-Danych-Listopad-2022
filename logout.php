<?php
session_start();
ob_start();

$_SESSION['login']='Zaloguj się';
header('Location:index.php');
?>