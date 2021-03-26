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
</body>
</html>