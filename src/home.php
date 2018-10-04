<html>
<head>
    <title>
        AskM8
    </title>
</head>
<body>
<?php
session_start();
echo $_SESSION['user'];
?>
<a href="logout.php">Logout</a>
<br>
<form  action="search.php" method="post">
    <input placeholder="Search..." name="query" maxlength="255" required="required"/>
    <input value="Search" type="submit"/>
</form>
<form action="add.php" method="post">
    Ask a question (255 characters):
    <br/>
    <textarea placeholder="Question Title..." name="title" maxlength="255" required="required"></textarea>
    <br/>
    Detailed description (1000 characters):
    <br/>
    <textarea placeholder="Question goes here..." name="description" maxlength="1000" required="required"></textarea>
    <input type="submit" value="Submit question"/>
</form>
<h2>My questions</h2>
<table>
    <tr>
        <td align="center">Title</td>
        <td align="center">Date</td>
        <td align="center">Amount of answers</td>
        <td align="center">User</td>
    </tr>
    <?php
    require("Link.php");
    $query = mysqli_query($link, "SELECT * FROM question");
    while ($row = mysqli_fetch_array($query)) {
        Print "<tr>";
        $title = $row['title'];
        Print '
        <td align="center"><a href="question.php?id='. $row['id']. '">'.$row['title'];'</a></td>'; //15 minutes of messing with quotes
        Print "<td align='center'>" . $row['date_posted'];
        "</td>";
        Print "<td align='center'>X</td>";
        $id = $row["user_id"];
        $user = mysqli_query($link, "SELECT * FROM user WHERE id=$id");
    while ($users = mysqli_fetch_assoc($user)) {
        $username = $users['username'];
    }
        Print "<td align='center'>" . $username;
        "</td>";
        Print "</tr>";
    }
    ?>
</table>
</body>
</html>