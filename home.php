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
    <form action="add.php" method="post">
        Ask a question (100 characters):<br/> <textarea placeholder="Question Title..." name="questiontitle" maxlength="100" required="required"></textarea><br/>
        Detailed description (1000 characters): <br/><textarea placeholder="Question goes here..." name="questiondesc" maxlength="1000" required="required"></textarea>
        <input type="submit" value="Submit question" />
    </form>
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