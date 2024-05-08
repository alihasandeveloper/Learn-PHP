<?php
// Global Variable

// =*= local variable =*=
$a = 95.5;
$b = 100;

function printValue() {
    // $a = 97 // local Variable
    global $a, $b; // Give me the access to this global variable
    echo "The value of a variable is " . $a . "<br>";
    echo "The value of b variable is " . $b . "<br>";
}

printValue();
$c = ($a);
var_dump($c);