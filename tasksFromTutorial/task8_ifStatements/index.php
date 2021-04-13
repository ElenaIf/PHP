<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>If statements</h1>

    <?php 
    
    $is_orange = true;
    $is_round = false;

    //one more logical operator - xor - checks if only one parameter is correct. If both are correct, returns false

    if ($is_orange && $is_round) {
        echo "Color is orange and shape is round";
        // if it is orange and NOT round (!)
    } elseif ($is_orange && !$is_round) {
        echo "Color is orange but shape is not round";
    } 
    else {
        echo "Something else";
    };

    function getMax($num1, $num2, $num3) {
        if($num1 >= $num2 && $num1 >= $num3){
            return $num1;
        } elseif ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        } else {
            return $num3;
        };
    };
    
    echo "<p>The bigger number is " . getMax(690, 670, 60) . "</p>";

    ?>


</body>
</html>