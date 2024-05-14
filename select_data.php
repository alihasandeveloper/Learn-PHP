<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contactus';
$conn = mysqli_connect($servername, $username, $password, $dbname);

<<<<<<< HEAD
$sql = "SELECT * FROM `information`";

$result = mysqli_query( $conn, $sql);


$num = mysqli_num_rows($result);

//Display the rows 

if($num > 00) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['name'];
        echo '<br>';
    }
}
=======
>>>>>>> 7323072796cf13b0ede8c8f8a33e27f52870ab6b
