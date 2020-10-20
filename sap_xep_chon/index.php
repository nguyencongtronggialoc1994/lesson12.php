<?php
function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}
$arr1 = [5,6,7,3,3,5,6,7,3,4,6,0,9,7,1,1,8,6,0,];
echo "<pre>";
print_r(selectionSort($arr1));