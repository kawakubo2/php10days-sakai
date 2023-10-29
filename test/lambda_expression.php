<?php
$numbers = [-3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$circle_area = [];
/*
foreach ($numbers as $num) {
    if ($num > 0 && $num % 2 === 0) {
        $circle_area[] = pow($num, 2) * M_PI;
    }
}
foreach($circle_area as $area) {
    print($area . "<br>");
}
*/
function area_total($nums, $filter) {
    $total = 0;
    foreach ($nums as $n) {
        if ($filter($n)) {
            $total += $n;
        }
    }
    return $total;
}
function positive_even($n) {
    return $n > 0 && $n % 2 === 0;
}

print(area_total($numbers, fn($num) => $num > 0 && $num % 2 === 0)); // Lambda式, アロー関数
print(area_total($numbers, 'positive_even'));
