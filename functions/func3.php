<?php
// レギュラーガソリンの料金計算
// $unit_price: 1リットル当たりの料金  $litter: 給油したリットル
function calc_charge(int $unit_price, float $litter): int {
    return (int)($unit_price * $litter);
}

$unit_price = 165;
$litter = 20;
$price = calc_charge($unit_price, $litter);
print("レギュラーガソリン{$litter}Lの料金は{$price}円となります。<br>");