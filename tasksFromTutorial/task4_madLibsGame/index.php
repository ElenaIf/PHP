<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs</title>
</head>
<body>
    
    <form action="index.php" method="get">

<label for="color">Color: </label>
<input type="text" name="color" id="color">

<label for="flowers">Flowers: </label>
<input type="text" name="flowers" id="flowers">

<label for="verb">Verb: </label>
<input type="text" name="verb" id="verb">

<label for="someone">Celebrity name: </label>
<input type="text" name="someone" id="someone">


    <input type="submit">
    </form>

<?php

$color = $_GET["color"];
$flowers = $_GET["flowers"];
$verb = $_GET["verb"];
$someone = $_GET["someone"];

echo "<p>Roses are $color</p>";
echo "<p>$flowers are blue</p>";
echo "<p>I don't $verb at night</p>";
echo "<p>Cause I'm thinking of $someone</p>";

?>

</body>
</html>