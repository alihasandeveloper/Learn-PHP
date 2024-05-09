<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = 'table_Db';
// connect to database

$conn = mysqli_connect( $servername, $username, $password, $database);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = 'CREATE TABLE `table_db`.`php_trip2` (`sn` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `distinetion` TEXT NOT NULL , `date` INT NOT NULL , PRIMARY KEY (`sn`)) ;
';
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Table created successfully";
}
else {
    echo "Error creating table: " . mysqli_error($conn);
}