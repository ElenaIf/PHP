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
    <title>Prepared statements</title>
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

$data = "Petrovich";

// created a template. We put here ? instead of the name, because it is a placeholder.
$sql = "select * from users where user_last_name = ?;";

// create a prepared statement. The function "mysqli_stmt_init($connection)" creates (="instantiates") and returns an object of type "mysqli_stmt" which is stored in that variable "$stmt". It is not preparded yet but it is instantiated just for that only purpose - to be prepared now.
$stmt = mysqli_stmt_init($connection);

// prepare the prepared statement. With the function "mysqli_stmt_prepare($stmt, $sql)", alongside with the passed arguments "$stmt" and the query "$sql", we let the object "$stmt" prepare itself with the passed query. Bear in mind: The variable "$sql" holds not the usual SQL-Statement, but is now a SQL-Statement with that questionmark, a placeholder so to say.
// Also the prepare-function does not only execute the preperation, but also returns a boolean. It returns true if succeeded and false if failed to prepare, which for most parts all these functions do.
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "<p>SQL statement failed</p>";
} else {
// Now if the preperation succeeded, before we execute the query, we have one thing left to do: We have to bind our variable to the placeholder of the prepared query statement, which in this case is the "?".
// With the function "mysqli_stmt_bind_param(  ,  ,  )"  we bind our variable to the  "?" of our prepared statement. So in order to do so, we pass three arguments:
// 1) the mysqli_stmt object "$stmt" (which up to this point has been prepared with the "$sql" query, which had the questionmark in it as a placeholder)
// 2) the type of the variable we want to replace the placeholder with  (which itself needs to be put in quotationmarks, as the type-argument needs to be a string.)
// 3) the variable itself we want to replace the placeholder with.
    mysqli_stmt_bind_param($stmt, "s", $data);
// Run parameters inside database. Now we execute the prepared statement
    mysqli_stmt_execute($stmt);
    // Represents the result set obtained from a query against the database.
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {
        // we access data as usually we would do with the array, by using [] brackets. But inside we write the name of the column we want to access.
        echo $row['user_id'] . " " . $row['user_first_name'] . " " . $row['user_last_name'] . "<br>";
    }

}

?>


</body>
</html>