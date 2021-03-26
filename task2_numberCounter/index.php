<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter</title>
</head>
<body>
    <h1>Number counter</h1>
    <p>Create a software that generate 1 random number between 0 - 100</p>
    <p>Create a software that will translate that number into text in FINNISH</p>
    <h2>Example:</h2>
    <ul>
        <li>10 - kymmenen</li>
        <li>11 - yksitoista</li>
        <li>12 - kaksitoista</li>
        <li>25 - kaksikymmentäviisi</li>
        <li>etc</li>
    </ul>
    <h2>Results:</h2>

    <?php

    $number = random_int(0, 100);

    $stringNumber = strval($number);

    $firstDigit = intval(substr($stringNumber, 0, 1));
    $secondDigit = intval(substr($stringNumber, 1));

    echo "<p>Random number is:</p>";

    // echo "<p>Random number is $number </p>";

    // echo "First part is $firstDigit";
    // echo "<br>";
    // echo "Last part is $secondDigit";
    // echo "<br>";

    $numberFirstPart;
    $numberLastPart;

    $zero = "nolla";
    $one = "yksi";
    $two = "kaksi";
    $three = "kolme";
    $four = "neljä";
    $five = "viisi";
    $six = "kuusi";
    $seven = "seitsemän";
    $eight = "kahdeksan";
    $nine = "yhdeksän";
    $ten = "kymmenen";
    $hundred = "sata";
    $tens = "kymmentä";
    $toista = "toista";

    if ($number <= 10 || $number === 100) {
        switch ($number) {
          case 0:
            echo "$number  - " .  $zero;
            break;
          case 1:
            echo "$number  - " .  $one;
            break;
          case 2:
            echo "$number  - " .  $two;
            break;
          case 3:
            echo "$number  - " .  $three;
            break;
          case 4:
            echo "$number  - " .  $four;
            break;
          case 5:
            echo "$number  - " .  $five;
            break;
          case 6:
            echo "$number  - " .  $six;
            break;
          case 7:
            echo "$number  - " .  $seven;
            break;
          case 8:
            echo "$number  - " .  $eight;
            break;
          case 9:
            echo "$number  - " .  $nine;
            break;
          case 10:
            echo "$number  - " .  $ten;
            break;
          case 100:
            echo "$number  - " .  $hundred;
            break;
          default:
            echo "Error";
            break;
        }
      } elseif ($number % 10 === 0 && $number !== 10 && $number !== 100) {
        switch ($number) {
          case 20:
            echo "$number - " . $two . $tens;
            break;
          case 30:
            echo "$number - " . $three . $tens;
            break;
          case 40:
            echo "$number - " . $four . $tens;
            break;
          case 50:
            echo "$number - " . $five . $tens;
            break;
          case 60:
            echo "$number - " . $six . $tens;
            break;
          case 70:
            echo "$number - " . $seven . $tens;
            break;
          case 80:
            echo "$number - " . $eight . $tens;
            break;
          case 90:
            echo "$number - " . $nine . $tens;
            break;
          default:
            echo "Error";
            break;
        }
      } elseif ($number > 20) {
        switch ($firstDigit) {
          case 2:
            $numberFirstPart = $two;
            break;
          case 3:
            $numberFirstPart = $three;
            break;
          case 4:
            $numberFirstPart = $four;
            break;
          case 5:
            $numberFirstPart = $five;
            break;
          case 6:
            $numberFirstPart = $six;
            break;
          case 7:
            $numberFirstPart = $seven;
            break;
          case 8:
            $numberFirstPart = $eight;
            break;
          case 9:
            $numberFirstPart = $nine;
            break;
          default:
            echo "Error";
            break;
        }

        switch ($secondDigit) {
            case 1:
              $numberLastPart = $one;
              break;
            case 2:
              $numberLastPart = $two;
              break;
            case 3:
              $numberLastPart = $three;
              break;
            case 4:
              $numberLastPart = $four;
              break;
            case 5:
              $numberLastPart = $five;
              break;
            case 6:
              $numberLastPart = $six;
              break;
            case 7:
              $numberLastPart = $seven;
              break;
            case 8:
              $numberLastPart = $eight;
              break;
            case 9:
              $numberLastPart = $nine;
              break;
            default:
              echo "Error";
              break;
          }
          echo "$number - " . $numberFirstPart . $tens . $numberLastPart;

    } elseif ($number > 10 && $number < 20) {
        switch ($secondDigit) {
          case 1:
            $numberFirstPart = $one;
            break;
          case 2:
            $numberFirstPart = $two;
            break;
          case 3:
            $numberFirstPart = $three;
            break;
          case 4:
            $numberFirstPart = $four;
            break;
          case 5:
            $numberFirstPart = $five;
            break;
          case 6:
            $numberFirstPart = $six;
            break;
          case 7:
            $numberFirstPart = $seven;
            break;
          case 8:
            $numberFirstPart = $eight;
            break;
          case 9:
            $numberFirstPart = $nine;
            break;
          default:
            echo "Error";
            break;
        }
      
        echo "$number - " . $numberFirstPart . $toista;
      }

    ?>

</body>

</html>