<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
}
else {
    echo "Connected successfully";
}

$sql = "DELETE FROM `information` WHERE `information`.`name` = 'Asif'";

$result = mysqli_query($conn, $sql);
$aff = mysqli_affected_rows($conn);
echo 'Numbers of affected rows: '.$aff .'<br>';

if ($result) {
    echo "Record deleted successfully";
}
else {
    echo "Error deleting record: " . mysqli_error($conn);
}

