<?php
// Associative Array

$favColor = array(
    'Asif' => 'Red',
    'Ali' => 'Green',
    'Harry' => 'Blue',
    'Nick' => 'White',
    'Thomas' => "Pink",
);
//


foreach ($favColor as $key => $value) {
    echo $key . ' fav color is: ' . $value ;
    echo '<br>';
}