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
$data = @file('guest.dat') or die('ファイルを開けませんでした。');
print('<dl>');
foreach (array_reverse($data) as $d) {
    $row = explode("\t", $d);
?>
    <dt><?=e($row[1]) ?>(<?=e($row[0]) ?>)</dt>
    <dd><?=e($row[2]) ?></dd>
<?php
}
print('</dl>');
?>    
</body>
</html>