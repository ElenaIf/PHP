<?php

// here we write the actual server name where is our database
$dbServerName = "localhost";

// user of the database. In XAMP it would be root.
$dbUsername = "elenaivankina";

// password. In my case I have no password
$dbPassword = "";

// name of the datavase that we are going to work with
$dbName = "loginSystem";

// mysqli::__construct -- mysqli::connect -- mysqli_connect — Open a new connection to the MySQL server
$connection = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

// to check the connection
if ($connection->connect_error) {
    die("<p>Connection failed: " . $connection->connect_error . "</p>");
  }
  echo "<p>Connected successfully: " . mysqli_get_host_info($connection) . "</p>";

?>