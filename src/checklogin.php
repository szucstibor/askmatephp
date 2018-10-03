<?php
session_start();
$link = mysqli_connect("localhost", "tipi", "12345", "ask_mate");
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
mysqli_select_db($link, "ask_mate");
$query = mysqli_query($link, "SELECT * FROM user WHERE username='$username'");
$exists = mysqli_num_rows($query);
$table_users = "";
$table_password = "";

if ($exists > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $table_users = $row['username'];
        $table_password = $row['password'];
    }
    if (($username == $table_users) && ($password == $table_password)) {
        $_SESSION['user'] = $username;
        header("location: home.php");
    } else {
        Print '<script>alert("Incorrect password");</script>';
        Print '<script>window.location.assign("login.php")</script>';
    }
} else {
    Print '<script>alert("Incorrect username");</script>';
    Print '<script>window.location.assign("login.php")</script>';
}