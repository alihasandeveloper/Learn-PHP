<?php
echo "Welcome to Functions!";

echo "<br>";

function processMarks($marksArr) {
    $sum  = 0;
    foreach ( $marksArr as $mark ) {
        $sum += $mark;
    }
    return $sum;
}
function avvarageMakrs($marksArr) {
    $sum  = 0;
    $i = 1;
    foreach ( $marksArr as $mark ) {
        $sum += $mark;
        $i++;
    }
    return $sum/$i;
}

$aliMarks = [65, 68,96, 36, 36, 78];
echo processMarks($aliMarks);
echo "<br>";
$avrmk = avvarageMakrs($aliMarks);
echo ($avrmk);