<html>
    <head>
        <title>Reg for askm8</title>
    </head>
    <body>
        <h2>Registration page</h2>
        <a href="index.php">Go back to the main page</a>
        <form action="register.php", method="POST">
            Enter username: <input type="text" name="username" required="required"/><br/>
            Enter password: <input type="text" name="password" required="required"/><br/>
            <input type="submit" value="Register"/>
        </form>
    </body>
</html>


<?php
$link = mysqli_connect("localhost", "root", "", "ask_mate");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($link , $_POST["username"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);
    $bool = true;

    mysqli_select_db($link, "ask_mate");
    $query = mysqli_query($link, "SELECT * FROM users");
    while($row = mysqli_fetch_array($query)){
        $table_users = $row['username'];
        if ($username == $table_users){
            $bool = false;
                Print '<script>alert("Username has been taken");</script>';
                Print '<script>window.location.assign("register.php")</script>';
        }
    }

    if ($bool){
        mysqli_query($link, "INSERT INTO users (username, password) VALUES ('$username', '$password') ");
        Print '<script>alert("Successfully registered!")</script>';
        Print '<script>window.location.assign("login.php")</script>';
    }
}
?>
