<?php
function bubbleSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr) - 1 - $i; $j++) {
            if ($arr[$j + 1] < $arr[$j]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$arr1 = [1,4,6,5,8,0,98,5,4,2,5,6,1,0,98,4,5];
echo "<pre>";
print_r(bubbleSort($arr1));