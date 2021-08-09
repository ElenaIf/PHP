<?php
// Check if user has clicked the button
if (isset($_POST['submit'])) {
    include_once 'data.php'; // we include the database
// get data from the form
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
// check if anything is empty
    if (empty($first) || empty($last) || empty($email) || empty($username) || empty($password)) {
        header("Location: index.php?signup=empty&first=$first&last=$last&username=$username&email=$email");
        exit(); // we close the script to make sure that the script does not continue
    } else {
        // check if characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
            header("Location: index.php?signup=char&first=$first&last=$last&username=$username&email=$email");
            exit();
        } else {
            // check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: index.php?signup=email&first=$first&last=$last&username=$username&email=$email");
                exit();
            } else {
                header("Location: index.php?signup=success");
                exit();
            }
        }
    }

} else {
    header("Location: index.php");
    exit();
}


