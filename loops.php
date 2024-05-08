<?php
/*
echo "While Loop";
$x = 0;
echo "<br>";
while($x < 30) {
    echo "<li>$x</li>";
    echo "<br>";
    $x= $x+1;
}

*/

/*
echo "For loop <br>";
$names = array('asif','hasan', 'toufik', 'sidratul');
for ($i = 0; $i < count($names); $i++) {
    $name =  $names[$i];
    echo "$name <br>";
}

*/

/*
echo "Do-while loop <br>";
$counter = 0;
do {
    echo "Hello". $counter ."<br>";
    $counter ++;
} while (1 >= $counter);

*/

echo "Foreach Loop<br>";
$names = array('asif','hasan', 'toufik', 'sidratul');

foreach ($names as $name) {
    echo "<li>";
    echo $name;
    echo "</li>";
    echo "<br>";
}
