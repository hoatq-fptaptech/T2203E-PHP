<?php
session_start();
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$cfpwd = $_POST["cfpwd"];
//var_dump($pwd);die("abc");
if($pwd == $cfpwd){
    $_SESSION["email"] = $email;
    header("Location: index.php");
    die();
}
$_SESSION["fullname"] = $fullname;
$_SESSION["email"] = $email;

$_SESSION["error"] = true;
header("Location: register.php");
