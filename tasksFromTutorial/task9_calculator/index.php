<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<form action="index.php" method="post">

<label for="num1">First number</label>
<!-- By default this number type takes only integer.
If I want to use decimals, I need to add step=0.1 into attributes of input -->
<input type="number" name="num1" id="num1">
<label for="operator">Operator</label>
<input type="text" name="operator" id="operator">
<label for="num2">Second</label>
<input type="number" name="num2" id="num2">
<input type="submit">

</form>
    
    <?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["operator"];

if($op == "+"){
    echo "<p>The answer is " . ($num1 + $num2) ."</p>";
} elseif ($op == "-") {
    echo "<p> The answer is " . ($num1 - $num2) ."</p>";
} elseif ($op == "/") {
    echo "<p> The answer is " . ($num1 / $num2) ."</p>";
} elseif ($op == "*") {
    echo "<p> The answer is " . ($num1 * $num2) ."</p>";
} else {
    echo "<p>Invalid operator</p>";
}

    ?>
</body>
</html>