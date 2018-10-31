<?php
session_start();
$id = $_POST["id"];
$pw = $_POST["password"];

if($id == "admin" && $pw == "1234"){
    $_SESSION["auth"] = true;
    $_SESSION["id"] = "admin";
}
header("location: index.php");
?>