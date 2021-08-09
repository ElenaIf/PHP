<!-- this function we should have on every page of our website. Then the session variable will be remembered -->
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



<h1>$GLOBALS</h1>

    <?php

$x = 5;

function usingGlobals()
{

    $y = 10;
    
    // this is used to access the variable outside the function
    echo $GLOBALS['x'];  // note that no $ sign here

}

usingGlobals();

?>

<h1>$_POST and $_GET</h1>

<form method="GET">
<input type="hidden" name="name" value="Elena">
<button type="submit">Submit get!</button>
</form>

<form method="POST">
<input type="hidden" name="name1" value="Elena">
<button type="submit">Submit post!</button>
</form>

    <?php

    echo $_POST['name1'];

   

$x = 5;

function something2()
{
    $y = 10;

}

something2();

?>

<h1>$_COOKIE and $_SESSION</h1>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
</ul>

    <?php

    // cookies are saved on the computer and they store some not very important information. Session stores more inportant information, like login and password

setcookie("name", "Elena", time() + 86400); // takes a current time and adds one day to it
// If i want cookies to be destroyed right away, I can put a negative number there, like: setcookie("name", "Elena", time() - 1);

$_SESSION["name_of_session"] = "ElenaSecretSession";
echo $_SESSION["name_of_session"];

if (!isset($_SESSION["name_of_session"])) {
echo " You are not logged in";
} else {
    echo " You are logged in";
}


?>



</body>
</html>