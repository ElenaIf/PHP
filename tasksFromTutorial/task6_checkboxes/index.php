<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>

    <form action="index.php" method="post">
<div>
    <label for="apple">Apple</label>
    <input type="checkbox" name="fruits[]" value="apple" id="apple">
</div>
    <label for="orange">Orange</label>
    <input type="checkbox" name="fruits[]" value="orange" id="orange">
<div>
    <label for="banana">Banana</label>
    <input type="checkbox" name="fruits[]" value="banana" id="banana">
</div>

    <input type="submit" value="Submit">

    </form>

    <?php

    $fruits = $_POST["fruits"];
    print_r($fruits);

    

    ?>
</body>
</html>