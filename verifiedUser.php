<?php
session_start();
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/usrHome.css">
    <title>HCKME</title>
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="logoText">
                <h3>HCKME</h3>
            </div>
            <div id="usrN">
                <?php 
                    echo "Welcome, $username";
                ?>
                <a href="logout.php"><button id="logout">Logout</button></a>
            </div>
        </div>
        <div id="usrBody">
            
        </div>
    </div>
</body>

</html>