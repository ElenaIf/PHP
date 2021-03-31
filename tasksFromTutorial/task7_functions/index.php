<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Functions</h1>

    <?php

function say_hi($name, $age){
    echo "Hello, $name, you are $age";
};

say_hi("Lena", 33);
echo "<br>";
say_hi("Petrovich", 50);
    ?>

<h2>Return statements</h2>

<?php 

function cube($num) {
return $num * $num * $num;
// The function is not executed any more after the return keyword. Everything that will come after will be ignored
};

$cube_result = cube(4);

echo "<p>The result of cubing is " . cube(4) . "</p>";

?>

</body>
</html>