<?php
$org_file = @fopen('guest.dat', 'rb') or die('ファイルがオープンできません。');
$tmp_file = fopen('guest.tmp', 'wb');
flock($org_file, LOCK_SH);
flock($tmp_file, LOCK_EX);
fputs($tmp_file, date('Y年m月d日 H:i:s') . "\t");
fputs($tmp_file, $_POST['name'] . "\t");
fputs($tmp_file, $_POST['message'] . "\n");
while ($row = fgets($org_file)) {
    fputs($tmp_file, $row);
}
flock($tmp_file, LOCK_UN);
flock($org_file, LOCK_UN);
fclose($tmp_file);
fclose($org_file);
unlink('guest.dat');
rename('guest.tmp', 'guest.dat');
setcookie('name', $_POST['name'], time() + (60 * 60 * 24 * 90));
header('Location: http://localhost:3000/lesson25/guest_input.php');
