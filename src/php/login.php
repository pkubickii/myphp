<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = password_hash($password, PASSWORD_ARGON2I);
echo "<h1>" . $_SESSION["password"] . "</h1>";
$pass = "$argon2i$v=19$m=65536,t=4,p=1$8RrWPbVisACu6LtaOvM+LQ$2mIwPjA3FHqWOhm3qLZgd81Y4iz+ohBRJ1sKH4ronf4";
$verify = password_verify("admin", $pass);
echo $verify;
