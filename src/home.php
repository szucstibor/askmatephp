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
         <form action="add.php" method="post">
             Ask a question (255 characters):
             <br/>
             <textarea placeholder="Question Title..." name="title" maxlength="255" required="required"></textarea>
             <br/>
             Detailed description (1000 characters):
             <br/>
             <textarea placeholder="Question goes here..." name="description" maxlength="1000" required="required"></textarea>
             <input type="submit" value="Submit question" />
         </form>
         <h2>My questions</h2>
         <table>
             <tr>
                 <td>Title</td>
                 <td>Date</td>
                 <td>Amount of answers</td>
                 <td>User</td>
             </tr>
             <?php
                require ("Link.php");
                $query = mysqli_query($link, "SELECT * FROM question");
                while($row = mysqli_fetch_array($query))
                {
                    echo "
                    <tr>";$row['title'];"</tr>
                    <tr>";$row['date_posted'];"</tr>
                    <tr>";"</tr>
                    <tr>";$row['user_id'];"</tr>
                    ";
                }
             ?>
         </table>
    </body>
</html>