<!-- here again we use session function -->

 <?php
 session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
</ul>

<?php

// we call the cariable, and it works, because of the session function on top
echo $_SESSION["name_of_session"];

if (!isset($_SESSION["name_of_session"])) {
    echo " You are not logged in";
    } else {
        echo " You are logged in";
    }

?>
    
</body>
</html>