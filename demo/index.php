<?php

$myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
$count = count($myArr);
$t = 0;
for ($i = 0; $i < $count-1; $i++) {
    for ($j = $count-1; $j >$i ; $j--) {
        if ($myArr[$j] < $myArr[$j - 1]) {
            $temp = $myArr[$j-1];
            $myArr[$j - 1] = $myArr[$j];
            $myArr[$j] = $temp;
        }
    }
}
for ($i = 0; $i < $count; $i++) {
    echo $myArr[$i] . " ";
}
