<?php
include_once 'data.php';
?>

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

$sql = "SELECT * FROM users;";
$result = mysqli_query($connection, $sql);
$datas = array();

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $datas[] = $row;
    }
}
// as a result we get a multidimentional array - arrays inside the arrays
print_r($datas);

echo "<br>";

// here we will take first array inside the array. So we will see the first user in the results
foreach ($datas[0] as $data) {
    echo "<p>The user is: " . $data . "</p>";
}

// here we will see all the results we have in the user name column
foreach ($datas as $data) {
    echo "<p>The first name is: " . $data["user_first_name"] . "</p>";
}
;

?>
</body>
</html>