<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/login.css">
    <script src="js/login.js"></script>
</head>
<body>
    <div class ="di">
        <form action="php/login.php" method="POST">
            <p> 
                <label>username</label>
                <input type="text" name="username" id="user">
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="password" id ="password">
            </p>
            <p>
                <input type = "submit" value="Submit" id ="submit">
            </p>
        </form>
        <form action="signup.php">
            <input type="submit" id="submit" value="Signup">
        </form>
    </div>
</body>
</html>
