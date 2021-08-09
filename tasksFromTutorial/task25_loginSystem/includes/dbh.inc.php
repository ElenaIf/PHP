<?php

$servername = "localhost";
$dBUsername = "elenaivankina";
$dBPassword = "";
$dBName = "phpproject01";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	// we kill whatever is happening by using die()
    die("Connection failed: " . mysqli_connect_error());
}
