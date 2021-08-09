<?php
include_once 'data.php';

// mysqli::real_escape_string -- mysqli_real_escape_string — Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection. It is done for sequrity reason. People cannot run scripts, they turn into text. But it is recommended to use prepared statements.
$first = mysqli_real_escape_string ($connection, $_POST['first_name']) ;
$last = mysqli_real_escape_string ($connection, $_POST['last_name']);
$email = mysqli_real_escape_string ($connection, $_POST['email']);
$role = mysqli_real_escape_string ($connection, $_POST['role']);
$password = mysqli_real_escape_string ($connection, $_POST['password']);

// we send placeholders into database. After that we will replace those placeholders with the actual data. 
$signupSql = "insert into users (user_first_name, user_last_name, user_email, user_role, user_pwd)
values (?, ?, ?, ?, ?);";

$stmt = mysqli_stmt_init($connection);

if (!mysqli_stmt_prepare($stmt, $signupSql)) {
echo "<p>SQL error</p>";
} else {
    // s means string
    mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $role, $password);
    mysqli_stmt_execute($stmt);
}


// we use header function to redirect user back to the index page
header("Location: index.php");
?>