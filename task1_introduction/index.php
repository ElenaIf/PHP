<!-- This is test exercise for PHP language. I tried different data formats, if statement -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP file Test</title>
</head>
<body>
   
    <?php 
    $someValue = 100; // integer. It has limits of minimum and maxomum numbers
    $anotherValue = 100.40; // decimal or double
    // It is not good to reassign a variable with another data type. It will convert automatically, but it might break your code
    $bigValue = 9223372036854775808; // this is bigger than the biggest number
    $value = PHP_INT_MAX;
    echo "<p>This is a type of $anotherValue" . " is " . gettype($anotherValue) . "</p>";
    echo "<p>This is a type of $bigValue" . " is " . gettype($bigValue) . "</p>";
    echo "<p>This is a type of $someValue" . " is " . gettype($someValue) . "</p>";
    echo "<p>This is a type of $value" . " is " . gettype($value) . "</p>";
    $sentence = "Hello you!!!";
    $name = "Elena"; // variables are case sensetive
    echo "<h1>Hello from php</h1>"; // commands in PHP are not case sensetive
    echo "<p>Here is a variable - $name</p>"; 
    echo "<p>Hello from second line</p>";
    echo "<p>How are you?</p>";
    echo "<p>Here is how to use dollar sign \$ - not a variable any more</p>";
    echo $sentence . " " . $name; // we cannot use here + sign. It works only with numbers

if ($someValue > $anotherValue) {
    echo "<p>True</p>";
} else {
    echo "<p>Not true</p>";
};
    ?>



</body>
</html>