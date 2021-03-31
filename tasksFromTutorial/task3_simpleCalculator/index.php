<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator</title>
</head>
<body>
    <h1>Calculator</h1>

    <form action="index.php" method="get">
    
    <label for="number1">Write first number here:</label>
    <input type="number" name="num1" id="number1">
    <label for="number2">Write second number here:</label>
    <input type="number" name="num2" id="number2">    
    <input type="submit">

    </form>

    <?php 
    
    if ($_GET != null) {
    echo "The sum of the numbers is: ";
   echo $_GET["num1"] + $_GET["num2"];
//note that submitted information appears in url of the page
    };
    ?>

</body>
</html>