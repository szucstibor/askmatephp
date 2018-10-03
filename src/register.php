<html>
    <head>
        <title>Reg for askm8</title>
    </head>
    <body>
        <h2>Registration page</h2>
        <a href="/askmatephp">Go back to the main page</a>
        <form action="register.php", method="POST">
            Enter username: <input type="text" name="username" required="required"/><br/>
            Enter password: <input type="text" name="password" required="required"/><br/>
            Enter email address: <input type="text", name="email" required="required"/><br/>
            <input type="submit" value="Register"/>
        </form>
    </body>
</html>


<?php
require ("Link.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysqli_real_escape_string($link, $_POST["username"]);
    $password = mysqli_real_escape_string($link, $_POST["password"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $bool = true;

    mysqli_select_db($link, "ask_mate");
    $query = mysqli_query($link, "SELECT * FROM user");
    while($row = mysqli_fetch_array($query)){
        $table_users = $row['username'];
        $table_email = $row['email'];
        if ($username == $table_users){
            $bool = false;
            Print '<script>alert("Username has been taken");</script>';
            Print '<script>window.location.assign("src/register.php")</script>';
        } elseif ($table_email == $email) {
            $bool = false;
            Print '<script>alert("Email address is already in use");</script>';
            Print '<script>window.location.assign("src/register.php")</script>';
        }

    }

    if ($bool){
        mysqli_query($link, "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email') ");
        Print '<script>alert("Successfully registered! You will be redirected to the home page.")</script>';
        $_SESSION['user'] = $username;
        Print '<script>window.location.assign("home.php")</script>';
    }
}
?>
