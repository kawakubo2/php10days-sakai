<?php
function test(string $pattern, array $targets, $ok = true) {
    $count = 0;
    foreach ($targets as $target) {
        print($target . ': ');
        if (preg_match($pattern, $target)) {
            $count++;
            print('○');
        } else {
            print('×');
        }
        print('<br>');
    }
    if ($ok) {
        if ($count == count($targets)) {
            print('合格: ');
        } else {
            print('不合格: ');
        }
    } else {
        if ($count == 0) {
            print('合格: ');
        } else {
            print('不合格: ');
        }
    }
    print($count . '/' . count($targets) . ' ');
    print('<br>--------------------------<br>');
}

$ok_pattern = ['1', '+2', '-3', '12', '+12', '-13', '1.23', '+2.34', '+3.45', 
                '12345', '+23456', '-34567', '123.4', '+234.5', '-345.0'];

$ng_pattern = ['1.2.3', '++3', '--3', '4+', '5-', '123.45+', 'abc', '123.45a',
               '45.678b'];

$number_pattern = '/^(\\+|-)?\\d+(\\.\\d+)?$/';

test($number_pattern, $ok_pattern, true);
test($number_pattern, $ng_pattern, false);