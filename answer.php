<?php
session_start();
$etr_answer = $_POST["answer"];
if($_SESSION["answer"] === $etr_answer){
    echo "success!";
    $_SESSION["score"] += $_SESSION["amount"];
}
else{
    echo "Wrong answer. Try Again";
}
header("Location:index.html");
?>