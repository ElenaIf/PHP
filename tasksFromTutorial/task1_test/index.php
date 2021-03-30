<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial tests</title>
</head>
<body>
    <h1>On this page I am testing the examples from the Youtube tutorial of Giraffe Academy</h1>
    <h2>Working with strings</h2>

    <?php
    $phrase = "Hello world, how are you?";
    echo "<p>The phrase is in uppercase: " . strtoupper($phrase) . "</p>"; // to make string uppercase
    echo "<p> The length of the string is " . strlen($phrase) . "</p>"; // to show the length of the string
    echo "<p>One of the characters is " . $phrase[0] . "</p>";
    $phrase[7] = "E";  // replace one character in the string
    echo "<p>After modification " . $phrase . "</p>";
    echo "<p>" . str_replace("Hello", "Bye", $phrase) . "</p>"; // replace a word in the phrase
    echo "<p> Printing starting from character 6: " . substr($phrase, 6) . "</p>";
    echo "<p>Printing 4 characters starting from character 6: " . substr($phrase, 6, 4) . "</p>";
    ?>

    <h2>Working with numbers</h2>
 <?php

$someInteger = 40;
$someDouble = 55.67;

echo "<p> $someInteger </p>";
echo "<p>$someDouble</p>";
echo "<p>Modular division 10 % 4: " . (10 % 4) . " </p>";
echo "<br>";
echo 5 + 5 * 10; // follows normal operation rules
 $someInteger++; // also works with -= += *= 
 echo "<br>";
 echo $someInteger;
 echo "<br>";

 echo "<p> Get the absolute value of -100: " . abs(-100) . "</p>"; // to get absolute value
 echo pow(2, 4); // 2 in a power of 4
 echo "<br>";
 echo sqrt(144); // square root from the number
 echo "<br>";
echo max(2, 10); // biggest number from two
echo "<br>";
echo min(2, 10); // smalles number from two
echo "<br>";
echo round(3.7); // rounded number
echo "<br>";
echo ceil(3.3); // rounded to the bigger number
echo "<br>";
echo floor(3.7); // will round down
 ?>

</body>
</html>