<?php
require ("Link.php");
session_start();
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);
mysqli_select_db($link, "ask_mate");
$query = mysqli_query($link, "SELECT * FROM user WHERE username='$username'");
$exists = mysqli_num_rows($query);
$table_users = "";
$table_password = "";
$table_id = "";

if ($exists > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $table_users = $row['username'];
        $table_id = $row['id'];
        $table_password = $row['password'];
    }
    if (($username == $table_users) && ($password == $table_password)) {
        $_SESSION['user'] = $username;
        $_SESSION['user_id'] = $table_id;
        header("location: home.php");
    } else {
        Print '<script>alert("Incorrect password");</script>';
        Print '<script>window.location.assign("login.php")</script>';
    }
} else {
    Print '<script>alert("Incorrect username");</script>';
    Print '<script>window.location.assign("login.php")</script>';
}