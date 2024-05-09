<?php
//echo "Welcome to the stage where are reary to get connected to a database";

// connect mysql to data base

/* ways to connect to MySQl Database

1. MySQLi extention
2.PDO

*/


// Connecting to the Database


$serverName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password);

// Die if connection was not successfull
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
echo "Connection was successful";
}
