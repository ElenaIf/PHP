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
    echo "Password:";
    echo "<br>";
    echo 'test123';
    echo "<br>";
    echo "Hashed password:";
    echo "<br>";
    echo password_hash("test123", PASSWORD_DEFAULT);
    echo "<br>";
    echo "Dehashed password is correct?";
    echo "<br>";

    $input = "test123";
    $hashedPasswordInDataBase = password_hash("test124", PASSWORD_DEFAULT);

    if(password_verify($input, $hashedPasswordInDataBase)) {
echo "YES!";
    } else {
        echo "NO!";
    }
    

    ?>
</body>
</html>