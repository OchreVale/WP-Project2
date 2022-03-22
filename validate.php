<?php
session_start();
$user = $_GET["name"];
$file = fopen("users.txt","w");
$_SESSION["name"] = $user;
$_SESSION["score"] = 0;
print_r($_SESSION);
fwrite($file, $user."\n");
fclose($file);
header("Location:index.html");

?>