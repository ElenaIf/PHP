<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="grade">What is your grade? A, B, C, F?</label>
    <input type="text" name="grade" id="grade">
    <input type="submit" value="Submit">
    </form>

<?php

$grade = $_POST["grade"];

switch($grade){
    case "A":
        echo "<p> Your grade is " . $grade . " and you did amazing!</p>";
        break;
        case "B":
            echo "<p> Your grade is " . $grade . " and you did pretty good</p>";
            break;
            case "C":
                echo "<p> Your grade is " . $grade . " and you did OK</p>";
                break;
                case "D":
                    echo "<p> Your grade is " . $grade . " and you did quite bad</p>";
                    break;
                    case "F":
                        echo "<p> Your grade is " . $grade . " and you failed</p>";
                        break;
                        default:
                        echo "<p> Invalid grade</p>";
                        break;
};

?>

</body>
</html>