<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contactus';
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `information`";

$result = mysqli_query( $conn, $sql);


$num = mysqli_num_rows($result);

//Display the rows

if($num > 00) {
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row['sn']. ' ' . $row['name'];
        echo '<br>';
    }
}


$sql = "UPDATE `information` SET `name` = 'Ali Hasan' WHERE `sn` = 27";

$result = mysqli_query( $conn, $sql);
echo $result;


