<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
        <h2>Log in to askm8, m8</h2>
        <a href="index.php">Go back to the main page</a>
        <form action="checklogin.php" method="post">
            Enter username: <input type="text" name="username" required="required"/><br/>
            Enter password: <input type="text" name="password" required="required"/><br/>
            <input type="submit" value="Login"/>
        </form>
    </body>
</html>