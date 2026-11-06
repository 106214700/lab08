<?php
session_start();

// CHANGE these two to your own name and student ID
$correct_user = "Bui The Vinh";
$correct_pass = "106214700";

if (isset($_POST["username"])) {
    $username = $_POST["username"];
} else {
    $username = "";
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
} else {
    $password = "";
}
if (isset($_POST["token"])) {
    $token = $_POST["token"];
} else {
    $token = "";
}

if ($username == $correct_user && $password == $correct_pass) {
    $_SESSION["user"] = $username;
    $_SESSION["token"] = $token;
    header("Location: welcome.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
