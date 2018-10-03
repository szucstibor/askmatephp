<?php
session_start();
if($_SESSION['user']){
}
else{
    header("location:index.php");
}

$time = strftime("%X"); //time
$date = strftime("%B %d, %Y"); //date

Print "$time - $date";