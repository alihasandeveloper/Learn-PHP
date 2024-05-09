<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fristdata";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed: " . mysqli_connect_error();
}
else {
    echo "Connected successfully";
}


$sql = "INSERT INTO `datalist` (`sn`, `name`, `distinetion`) VALUES (NULL, 'Raju', 'Ausrilia');";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<br>Data insert was successfully";
}
else {
    echo "<br>Data insert was not successfully" . mysqli_error($conn);
}

