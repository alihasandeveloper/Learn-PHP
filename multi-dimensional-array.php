<?php
//Multidimentional Array
// { array() and [] } is same notice
$multiDim = [
    [2,5,7,8],
    [1,2,3,1],
    [4,5,0,1]
];


/*exaple
$i = [2,5,7,8]
$j[0] = 2;
*/
// Printing 2 dimentional array

for ($i = 0; $i < count($multiDim); $i++) {
    for ($j = 0; $j < count($multiDim[$i]); $j++) {
        echo $multiDim[$i][$j] . " ";
    }
    echo '<br>';
}

// 3 dimentional array

$multiDim2 = [
    [
        [1,2,3],
        [4,5,6],
        [4,5,6]
    ],
    [
        [1,2,3],
        [4,5,6],
        [4,5,6]
    ],
    [
        [1,2,3],
        [4,5,6],
        [4,5,6]
    ],

    [
        [1,2,3],
        [4,5,6],
        [4,5,6],
        [7,8,9],
        [
//            [1,2,3],
//            [4,5,6],
//            [4,5,6],
//            [
//                [1,2,3],
//                [4,5,6],
//            ]
        ]
    ],

];

for ($i = 0; $i < count($multiDim2); $i++) {
    for ($j = 0; $j < count($multiDim2[$i]); $j++) {
       for ($k = 0; $k < count($multiDim2[$i][$j]); $k++) {
           echo   $multiDim2[$i][$j][$k] . " ";
           echo ',';
//           for ($l = 0; $l < count($multiDim2[$i][$j][$k]); $l++) {
//               echo $multiDim2[$i][$j][$k][$l] . " ";
//           }

       }

        echo '<br>';
    }
    echo '<br>';
}

//echo $multiDim2[0][0][2];