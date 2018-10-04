<?php
session_start();
echo $_SESSION['user'];
?>
<a href="logout.php">Logout</a>
<br>
<a href="home.php">Back to homepage</a>
<br/>
<form action="search.php" method="post">
    <input placeholder="Search..." name="query" maxlength="255" required="required"/>
    <input value="Search" type="submit"/>
</form>
<h2>Questions</h2>
<table>
    <tr>
        <td align="center">Title</td>
        <td align="center">Date</td>
        <td align="center">Amount of answers</td>
        <td align="center">User</td>
    </tr>
    <?php
    require("Link.php");
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $search_query = $_POST['query'];
        $query = mysqli_query($link, "SELECT * FROM question WHERE question.title LIKE '%$search_query%'");
        while ($row = mysqli_fetch_array($query)) {
            Print "<tr>";
            Print "<td align='center'>" . $row['title'];
            "</td>";
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
    }
    ?>
</table>

