<?php
function insertionSort($arr)
{
    for ($i = 1; $i < count($arr); $i++) {

        $value = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $value) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $value;
    }
    return $arr;
}

$arr1 = [6, 4, 8, 5, 3, 1, 7, 1, 9, 0, 4, 6, 7, 8];
echo "<pre>";
print_r(insertionSort($arr1));