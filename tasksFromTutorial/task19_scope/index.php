<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

// this is in the global scope. We can access it from anywhere
$x = 5; 

function something()
{
    // this is inside a local scope. If we try to access this variable outside the function, we will get an error
    $y = 10;
}


?>


</body>
</html>