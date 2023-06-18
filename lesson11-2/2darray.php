<?php
$scores = [
    [ 88, 70, 91 ],
    [ 75, 82, 63 ],
    [ 77, 85, 83 ],
    [ 68, 67, 95 ] 
];
print('---< foreach版 >---<br>');
foreach ($scores as $score) {
    $subtotal = 0;
    foreach ($score as $s) {
        $subtotal += $s;
    }
    print($subtotal . '<br>');
}

print('---< for版 >---<br>');
for ($i = 0; $i < count($scores); $i++) {
    $subtotal = 0;
    for ($j = 0; $j < count($scores[$i]); $j++) {
        $subtotal += $scores[$i][$j];
    }
    print($subtotal . '<br>');
}