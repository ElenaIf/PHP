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

class Chef
{
    public function makeChicken()
    {
        echo "<p>The chef makes chicken</p>";
    }

    public function makeSalad()
    {
        echo "<p>The chef makes salad</p>";
    }

    public function makespecialDish()
    {
        echo "<p>The chef makes a special dish - BBQ ribs</p>";
    }
}

// The class ItalianChef inherits everything from the Chef class and it can also has its own additional functions and other stuff
class ItalianChef extends Chef
{

    public function makePasta()
    {
        echo "<p>The italian chef makes pasta</p>";
    }
// it also can overwrite the functions from the class Chef. We just need to use the same name
    public function makespecialDish()
    {
        echo "<p>The italian chef makes a special dish - pizza</p>";
    }

}

$chef = new Chef();
$chef->makeChicken();
$chef->makespecialDish();

$italianChef = new ItalianChef();
$italianChef->makePasta();
$italianChef->makeChicken();
$italianChef->makespecialDish();

?>
</body>
</html>