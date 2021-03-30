<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>
    


<h2>User Input</h2>

<form action="index.php" method="get">
<label for="name1">Name:</label>
<input type="text" name="userName" id="name1">
<label for="ageid">Age:</label>
<input type="number" name="age" id="ageid">
<input type="submit">
</form>

<?php
//name inside GET should be the same as name attribute in the form input. NOT id
    echo "<p>Your name is: " . $_GET["userName"] . "</p>";
    echo "<p>Your age is: " . $_GET["age"] . "</p>";
    ?>

</body>
</html>