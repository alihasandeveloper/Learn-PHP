<?php

$name = "Ali Hasan";
$hobby = "My hobby is coding";
echo $name;

echo "<br>";
echo 'The length of my string is: '. strlen($name);
echo "<br>";
echo 'Word Count: '.str_word_count($name);
echo "<br>";
echo strpos($name, 'H'); // word index possition check
echo "<br>";
echo str_replace("coding", "playing", $hobby); // replace
echo "<br>";
//echo str_repeat($hobby, 31);// repeat

echo "<br>";

echo "<pre>";
echo rtrim("       Coding is my passion        ");
echo "<br>";
echo ltrim("       Coding is my passion        ");
echo "</pre>";

echo "<br>";