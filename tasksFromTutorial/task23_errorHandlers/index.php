<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error handlers</title>
</head>
<body>

<form action="signup.php" method="POST">
<?php

if (isset($_GET['first'])) {
    $first = $_GET['first'];
    echo '<input type="text" name="first_name" placeholder="First Name" value="'.$first.'">';
} else {
    echo '<input type="text" name="first_name" placeholder="First Name">';
}
;

if (isset($_GET['last'])) {
    $last = $_GET['last'];
    echo '<input type="text" name="last_name" placeholder="Last Name" value="'.$last.'">';
} else {
    echo '<input type="text" name="last_name" placeholder="Last Name">';
}
;

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    echo '<input type="email" name="email" placeholder="Email" value="'.$email.'">';
} else {
    echo '<input type="email" name="email" placeholder="Email">';
}
;

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    echo '<input type="text" name="username" placeholder="Username" value="'.$username.'">';
} else {
    echo '<input type="text" name="username" placeholder="Username">';
}
;

?>

<input type="password" name="password" placeholder="Password">
<button type="submit" name="submit">Sign up</button>

</form>

<?php

// This method is not user friendly because it erases the whole form in case of error
// $full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// if (strpos($full_url, "signup=empty") == true) {
//     echo "You did not fill in all fields!";
//     exit();
// } elseif (strpos($full_url, "signup=char") == true) {
//     echo "Characters in the name are not allowed!";
//     exit();
// } elseif (strpos($full_url, "signup=invalidemail") == true) {
//     echo "Used invalid email!";
//     exit();
// } elseif (strpos($full_url, "signup=success") == true) {
//     echo "Signed in successfully!";
//     exit();
// }
// ;

if (!isset($_GET['signup'])) {
    exit();
} else {
    $signup_check = $_GET['signup'];

    if ($signup_check == "empty") {
        echo "You did not fill in all fields!";
        exit();
    } elseif ($signup_check == "char") {
        echo "Characters in the name are not allowed!";
        exit();
    } elseif ($signup_check == "email") {
        echo "Used invalid email!";
        exit();
    } elseif ($signup_check == "success") {
        echo "Signed in successfully!";
        exit();
    }
}

?>

</body>
</html>