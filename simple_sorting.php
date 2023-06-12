<?php 

$arr = [10, 40, 55, 20, 35, 100, 70];

// sort simple array in ascending/descending order  without using built-in sort function
$length = count($arr);
for ($i = 0; $i < $length - 1; $i++) {
    $big = [];
    $small = [];
    $eq = [];
    for($j = 0; $j < $length; $j++) {
        if ($arr[$i] == $arr[$j]) {
            array_push($eq, $arr[$j]);
        } elseif ($arr[$i] > $arr[$j]) {
            array_push($small,$arr[$j]);
        } else {
            array_push($big,$arr[$j]);
        }
    }
    $arr = array_merge($small, $eq, $big); // ascending
    // $arr = array_merge($big, $eq, $small); // descending
}

print_r($arr);

// Smaple Output:-
/* Array
(
    [0] => 10
    [1] => 20
    [2] => 35
    [3] => 40
    [4] => 55
    [5] => 70
    [6] => 100
)
*/

 ?>