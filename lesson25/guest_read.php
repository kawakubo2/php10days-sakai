<?php
require_once '../Encode.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <a href="./guest_input.php" class="btn btn-secondary ml-2 mt-2">書き込み</a>
    <h3>ゲストブック(閲覧)</h3>
<?php
if (isset($_SESSION['message'])) {
    print("<p style='color: blue;'>{$_SESSION['message']}</p>");
    unset($_SESSION['message']);
}
$org_file = fopen('guest.dat', 'rb');
$tmp_file = fopne('guest.tmp', 'wb');
flock($org_file, LOCK_SH);
flock($tmp_file, LOCK_EX);

fputs($tmp_file, date('Y年m月d日 H:i:s') . "\t");
fputs($tmp_file, $POST['message'] . "\t");
fputs($tmp_file, $POST['name'] . "\n");
while ($row = fgets($org_file)) {
    fputs($tmp_file, $row);
}

flock($tmp_file, LOCK_UN);
flock($org_file, LOCK_UN);
fclose($tmp_file);
fclose($org_file);
unlink('guest.dat');
rename('guest.tmp', 'guest.dat');
header('Location: http://localhost:3000/lesson24-2/guest_read.php');
?>    
</body>
</html>