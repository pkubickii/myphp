<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = password_hash($password, PASSWORD_DEFAULT);
header("Location: /myphp/index.php");
