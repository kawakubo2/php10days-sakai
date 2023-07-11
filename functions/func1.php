<?php
function add(float $x, float $y): float {
    return $x + $y;
}

$a = 12.3;
$b = 37.7;
$answer1 = add($a, $b);
print($answer1 . '<br>');