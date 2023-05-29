<?php
print('現在日時: ' . date('Y年m月d日 H:i:s') . '<br>');
print('現在日時: ' . date('Y年m月d日 H:i:s', time()) . '<br>');
print('現在日時: ' . date('Y年m月d日 H:i:s', 1684000000) . '<br>');
print('現在日時: ' . date('Y年m月d日 H:i:s', mktime(12,35,45,6,23,2023)) . '<br>');
print('うるう年' . (date('L') ? 'です' : 'ではありません') . '<br>' );
