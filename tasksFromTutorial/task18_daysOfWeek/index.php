<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeksdays</title>
</head>
<body>

    <?php

$weekday = date("w");

echo $weekday . " - ";

switch ($weekday) {
    case 1:
        echo "Monday!";
        break;
    case 2:
        echo "Tuesday!";
        break;
    case 3:
        echo "Wednesday!";
        break;
    case 4:
        echo "Thursday!";
        break;
    case 5:
        echo "Friday!";
        break;
    case 6:
        echo "Saturday!";
        break;
    case 0:
        echo "Sunday!";
        break;
    default:
        echo "Error occured";
}

?>

</body>
</html>