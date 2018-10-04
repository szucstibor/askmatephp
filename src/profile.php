<html>
<head>
    <title>Home page</title>
</head>
<?php
session_start();
if($_SESSION['user']){
}
else{
    header("location: login.php");
}
$user = $_SESSION ['user'];
?>

<body>
    <h2>Home page</h2>
    <a href="logout.php">Logout</a>

    <?php Print "<p>". $user.": Hello there</p>";
        Print"<p>Server: ".$user."!</p>"; ?>
    <h2>My questions</h2>
    <table>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Amount of answers</td>
        </tr>
    </table>
</body>
</html>