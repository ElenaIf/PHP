<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Regular arrays</h1>
    <?php 
    $friends = array("Petrovich", "Anna", "Toni", "Lena");
    // echo $friends . " - Echo only prints the word array";
echo "<p>" . $friends[0] . " - first element in the array" . "</p>";
$friends[1] = "Sonya";
echo "<p>" . $friends[1] . " - replaced one name</p>";
$friends[4] = "extra friend";
echo "<p>" . $friends[4] . "</p>";
echo "<p>" . count($friends) . " - length of the array</p>";

    ?>

    <h1>Assosiative array</h1>

    <form action="index.php" method="post">
<label for="student">Write a name of student whose grade you want to know</label>
<input type="text" name="student" id="student">
<input type="submit" value="Submit">
</form>

    <?php
    //in assosiative array we store values with keys. Key is a value on the left. They have to be unique!!!
    $grades = array("Tom" => "A+", "Pam" => "A", "Petrovich" => "C+");
print_r($grades);
count($grades);
    echo "<p>Tom got " . $grades["Tom"] . "</p>";

    echo $_POST["student"] . " got " . $grades[$_POST["student"]];

    ?>



</body>
</html>

<!-- echo "<p>" .  . "</p>"; -->