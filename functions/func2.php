<?php
function sumup(int $n) {
    $total = 0;
    for ($i = 1; $i <= $n; $i++) {
        $total += $i; // $total = $total + $i
    }
    return $total;
}

$n = 1000;
$a = sumup($n);
print("1～{$n}までの総和: {$a}<br>");