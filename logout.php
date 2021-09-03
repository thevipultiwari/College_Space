<?php
session_start();
$_SESSION['username']=NULL;
$_SESSION['password']=NULL;

$_SESSION['facname']=NULL;
$_SESSION['facpswd']=NULL;

$_SESSION['adminid']=NULL;
$_SESSION['adminpswd']=NULL;
header("location:index.php");
?>