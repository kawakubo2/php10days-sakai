<?php
$kakeibo = [
    ['日付' => '2025-05-03', '費目' => '食費', 'メモ' => 'コーヒーを購入', '入金額' => 0, '出金額' => 380],
    ['日付' => '2025-05-10', '費目' => '給料', 'メモ' => '4月の給料', '入金額' => 300000, '出金額' => 0],
    ['日付' => '2025-05-11', '費目' => '教養娯楽費', 'メモ' => '書籍を購入', '入金額' => 0, '出金額' => 2800],
    ['日付' => '2025-05-14', '費目' => '交際費', 'メモ' => '同期会の会費', '入金額' => 0, '出金額' => 5000]
];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kakeibo.css">
    <title>Document</title>
</head>
<body>
   <h3>家計簿</h3> 
   <table id="kakeibo">
    <thead>
        <tr>
            <th>日付</th>
            <th>費目</th>
            <th>メモ</th>
            <th>入金額</th>
            <th>出金額</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($kakeibo as $k) { ?>
    <tr>
        <td><?=$k['日付'] ?></td>
        <td><?=$k['費目'] ?></td>
        <td><?=$k['メモ'] ?></td>
        <td class="price"><?=$k['入金額'] ?></td>
        <td class="price"><?=$k['出金額'] ?></td>
    </tr>
<?php } ?>
    </tbody>
   </table>
</body>
</html>