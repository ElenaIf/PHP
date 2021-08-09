<!-- here we included the file with the database connection. This was we will have access to the variable $connection -->
<?php
include_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>

<form action="signup.php" method="POST">
<input type="text" name="first_name" placeholder="First Name">
<input type="text" name="last_name" placeholder="Last Name">
<input type="email" name="email" placeholder="Email">
<input type="text" name="role" placeholder="Role">
<input type="password" name="password" placeholder="Password">
<button type="submit" name="submit">Sign up</button>

</form>

<?php
// sql statements. Note: the ';' is important in SQL!
$sql = "select * from users;";

// mysqli::query -- mysqli_query — Performs a query on the database
$result = mysqli_query($connection, $sql);

// mysqli_result::$num_rows -- mysqli_num_rows — Gets the number of rows in a result
$resultCheck = mysqli_num_rows($result);

echo "<p>The result has " . $resultCheck . " rows</p>";

// we check if we have result more than zero.
if ($resultCheck > 0) {
    // now we need to print out data. We fetch the data with mysqli_fetch_assoc() function and we insert it intoo $row variable and make it an array.
    // mysqli_result::fetch_assoc -- mysqli_fetch_assoc — Fetch a result row as an associative array
    // Returns an associative array of values representing the fetched row in the result set, where each key in the array represents the name of one of the result set's columns or null if there are no more rows in result set.
    while ($row = mysqli_fetch_assoc($result)) {
        // we access data as usually we would do with the array, by using [] brackets. But inside we write the name of the column we want to access.
        echo $row['user_id'] . " " . $row['user_first_name'] . " " . $row['user_last_name'] . "<br>";
    }
}

// to insert new data into database
$newSql = "insert into users (user_first_name, user_last_name, user_email, user_role, user_pwd)
values ('Anna', 'Karenina', 'test11@test11.fi', 'User', 'secret');";

function addData () {
    mysqli_query($GLOBALS['connection'] , $GLOBALS['newSql']);
}

?>


</body>
</html>