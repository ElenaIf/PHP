<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>

<h1>While loop</h1>

    <?php

$index = 1;
// Check the condition first and then execute the body of the loop
while ($index <= 5) {
    echo "<p>" . $index . "</p>";
    $index++;
}
;

?>

<h1>Do While loop</h1>

    <?php

$index2 = 6;

// Execute the body of the loop first and then check the condition

do {
    echo "<p>" . $index2 . "</p>";
    $index2++;

} while ($index2 <= 5);

?>

    <h1>For loop</h1>

    <?php

for ($i = 1; $i <= 5; $i++) {
    echo "<p>\$i equals " . $i . " now</p>";
}

?>

    <h1>For loop to print an array</h1>

    <?php

$numbers = array(4, 5, 3, 6, "Hello", 6, 56);

// we start j at 0 because array starts with 0
for ($j = 0; $j < count($numbers); $j++) {
    echo $numbers[$j];
}
;

?>

    <h1>Foreach loop</h1>

    <?php

$array = array("Lena", "Toni", "Petrovich", "Maria", "Joni");

// foreach deals with array
//$loop_data is a variable we are going to use inside an array
foreach ($array as $loop_data) {
    echo "<p>My name is " . $loop_data . "</p>";
}
//foreach loop is good because we will not create an infinite loop. It will run until the array has data in it

?>

</body>
</html>