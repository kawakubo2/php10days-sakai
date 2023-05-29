<?php
$data = ['山田太郎', '横山花子', '田中一郎', '山本久美子', '鈴木次郎', '星山裕子', '佐藤勝男'];
$data[2] = '井上翔太';
$data[] = '山口はな';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>配列の基本</h3>
    <p>名簿には<?=count($data); ?>人が登録されています。</p>
    <ol>
        <li><?=$data[0] ?></li>
        <li><?=$data[1] ?></li>
        <li><?=$data[2] ?></li>
        <li><?=$data[3] ?></li>
        <li><?=$data[4] ?></li>
        <li><?=$data[5] ?></li>
        <li><?=$data[6] ?></li>
        <li><?=$data[7] ?></li>
    </ol>
</body>
</html>
