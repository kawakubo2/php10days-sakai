<?php
$fruits = ['banana', 'orange', 'banana', 'apple', 'pear', 'banana',
          'apple', 'pear', 'grape', 'banana'];

$counter = [];
foreach ($fruits as $f) {
    if (isset($counter[$f])) {
        $counter[$f] += 1;
    } else {
        $counter[$f] = 1;
    }
}

foreach ($counter as $fruit => $count) {
    print("{$fruit}: {$count}<br>");
}

$counter2 = array_count_values($fruits);
print('<pre>');
print_r($counter2);
print('</pre>');