<?php
$fruits = ['banana', 'apple', 'banana', 'orange', 'banana', 'apple'];

/*
$fruits = ['banana', 'apple', 'banana', 'orange', 'banana', 'apple'];
↓
['banana' => 3, 'apple': 2, 'orange': 1]

フルーツの配列を受け取り、その個数を持った連想配列を返す関数
*/
function fruit_counter(array $fruits):array {
    $counter = [];
    foreach ($fruits as $f) {
        if (isset($counter[$f])) {
            $counter[$f]++;
        } else {
            $counter[$f] = 1; // ['banana': 1]
        }
    }
    return $counter;
}

$result = fruit_counter($fruits);

echo "<ul>";
foreach ($result as $fruit => $count) {
    echo "<li>{$fruit}: {$count}</li>";
}
echo "</ul>";