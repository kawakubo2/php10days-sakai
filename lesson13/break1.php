<?php
$words = ['旅行', 'かばん', 'テレビ', '電信柱', '終了', '岸辺', 'ラジオ'];

foreach ($words as $w) {
    if ($w === '終了') {
        break;
    }
    print($w . ' ');
}