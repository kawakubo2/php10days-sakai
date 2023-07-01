<?php
$words = ['旅行', 'かばん', 'NG', 'テレビ', '電信柱', 'NG', '岸辺', 'ラジオ'];

foreach ($words as $w) {
    if ($w === 'NG') {
        continue; // 繰り返し構文の先頭に戻る
    }
    print($w . ' ');
}