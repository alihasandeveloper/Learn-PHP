<?php


$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);



// Create a Database

$sql = "CREATE DATABASE datalist";
$result = mysqli_query($conn, $sql);

echo "The resut is";
echo var_dump($result);
echo "<br>";
if ($result) {
    echo "Database created successfully";
}
else {
    echo "Error creating database: " . mysqli_error($conn);
}
if ($conn->connect_error) {
    echo "connection failed: " . $conn->connect_error;
}

else {
    echo "connected successfully";

    echo '<br>';
}