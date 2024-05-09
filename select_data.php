<?php

// set value
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactus";
// connect database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// die if connect error
if (!$conn) {
    die("There was an error connecting to the database: " . mysqli_connect_error());
}
else {
    echo "Connected successfully<br>";
}

// select ta table row
$sql = "SELECT * FROM `information`";

$result = mysqli_query($conn, $sql);

// Find the number of records returns
$num = mysqli_num_rows($result);
echo $num . " Records found in Database <br>";
if ($num > 0) {
//    $row = mysqli_fetch_assoc($result);
//    echo var_dump($row);
//    echo '<br>';

    // we can fatch in a better way by using while loop
    while(  $row = mysqli_fetch_assoc($result)) {
//        echo var_dump($row) . "<br>";
        echo $row['sn']." : " ." Hello " . $row['name'] . " your exail is: ". $row['email'] ." and your entry time is $row[entrydate]". "<br>";
    }
}