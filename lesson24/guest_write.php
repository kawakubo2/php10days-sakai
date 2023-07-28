<?php
session_start();
$file = fopen('guest.dat', 'ab');
flock($file, LOCK_EX);
fputs($file, date('Y年m月d日 H:i:s') . "\t");
fputs($file, $_POST['name'] . "\t");
fputs($file, $_POST['message'] . "\n");
flock($file, LOCK_UN);
fclose($file);
$_SESSION['message'] = '登録に成功しました。';
header('Location: http://localhost:3000/lesson23/guest_read.php');