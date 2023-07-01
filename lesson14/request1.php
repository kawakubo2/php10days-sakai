<?php
$data = [
    'name'  => '山田太郎',
    'email' => 'yamada@wings.msn.to',
    'zip'   => '100-0000',
    'sex'   => '男',
    'age'   => '40',
    'os'    => ['win', 'linux'],
    'memo'  => '特になし'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP入門教室</title>
</head>
<body>
    <h3>アンケート</h3>
    <form action="request2.php" method="post">
        <div class="container">
            <label for="name">名前: </label><br>
            <input type="text" name="name" id="name" value="<?=$data['name'] ?>">
        </div>
        <div class="container">
            <label for="email">メールアドレス: </label><br>
            <input type="email" name="email" id="email" value="<?=$data['email'] ?>">
        </div>
        <div class="container">
            <label for="zip">郵便番号: </label><br>
            <input type="text" name="zip" id="zip" value="<?=$data['zip'] ?>">
        </div>
    </form>
</body>
</html>