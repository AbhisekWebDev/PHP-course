<?php

    $db = mysqli_connect("localhost","root","","crud");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " 
            . mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title>GFG SQL Injection Article</title>
    <link rel="stylesheet" type="text/css" 
        href="style.css">
</head>

<body>
    <div id="form">
        <h1>LOGIN FOR SQL INJECTION</h1>
        <form name="form" action="verifyLogin.php" method="POST">

            <p>
                <label> USER NAME: </label>
                <input type="text" id="user" name="userid" />
            </p>

            <p>
                <label> PASSWORD: </label>
                <input type="text" id="pass" name="password" />
            </p>

            <p>
                <input type="submit" id="button" value="Login" />
            </p>
        </form>
    </div>
</body>

</html>