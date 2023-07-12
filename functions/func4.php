<?php
/*
    整数値の配列を引数としてもらい、その合計を計算して返す
*/
function calc_array_total($numbers): int {
    $total = 0;
    foreach($numbers as $num) {
        $total += $num; // $total = $total + $num;
    }
    return $total;
}

$nums = [5, 9, 3, 1, 10, 4, 6, 7, 8, 2];
$answer = calc_array_total($nums);
print("合計: {$answer}<br>");