<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jackpot PHP</title>
</head>
<body>
    <h1>Jackpot</h1>

    <?php

    $number1 = random_int(0, 1);
    $number2 = random_int(0, 1);
    $number3 = random_int(0, 1);
    $number4 = random_int(0, 1);
    $number5 = random_int(0, 1);

    $winningProbability = 1 / 2 ** 5;

    $sum = $number1 + $number2 + $number3 + $number4 + $number5;

    echo "<p>Your numbers are: " . $number1 . $number2 . $number3 . $number4 . $number5 . "</p>";

    if ($sum === 5) {
        echo "<p>You have won! Congratulations!</p>";
        echo "<p>The probability for you to win was: " . $winningProbability . "</p>";
      } elseif ($sum === 0) {
        echo "<p>Well, congrats anyway</p>";
      } else {
        echo "<p>You lost!</p>";
      }


    ?>
</body>
</html>