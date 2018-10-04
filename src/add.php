<?php
require ("Link.php");
session_start();
if($_SESSION['user']){
}
else{
    header("location:home.php");
}


Print "$time - $date";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user = $_SESSION['user_id'];
    $title = mysqli_real_escape_string($link, $_POST['title']);
    $description = mysqli_real_escape_string($link, $_POST['description']);
    $time = strftime("%X"); //time
    $date = strftime("%B %d, %Y"); //date
    mysqli_query($link, "INSERT INTO question (user_id, title, description, date_posted, time_posted) 
                  VALUES ('$user', '$title', '$description', '$date', '$time')");
    header("location: home.php");

}