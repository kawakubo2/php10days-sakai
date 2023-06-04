<?php
$file = fopen('meibo.txt', 'rb') or die('ファイルを開くことができませんでした。');
flock($file, LOCK_EX);
print('<ol>');
while ($line = fgets($file)) {
    print('<li>' . $line . '</li>');
}
print('</ol>');
flock($file, LOCK_UN);
fclose($file);