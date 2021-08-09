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
// indexed array
$data = array("Lena", "Toni", 35, 199);
echo "<p>" . $data[0] . "</p>";

// associative array

$data1 = array("first" => "Lena", "last" => "Ivankina", "age" => 33);

echo "<p>" . $data1["first"] . "</p>";

$data2 ["first"] = "Daniel";
$data2 ["last"] = "Nelson";
$data2 ["age"] = 25;
echo "<p>" . $data2["first"] . "</p>";


?>
</body>
</html>