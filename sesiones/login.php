<?php

session_start();

$users = [

    array(
        "username" => "Retaxito",
        "email" => "retaxito@noesmiemail.com"
    ),

    array(
        "username" => "Danny",
        "email" => "danny@noesmiemail.com"
    ),

];

$user = $_GET["user"] ?? "";

$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];

echo $users[$user]["username"];