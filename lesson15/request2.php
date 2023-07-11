<?php
require_once '../Encode.php';
print('<pre>');
print_r($_POST);
print('</pre>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ご回答ありがとうございました。</h3>
    <p>以下の内容で送信しました。</p>
    <dl>
        <dt>名前: </dt>
        <dd><?=e($_POST['name']) ?></dd>
        <dt>メールアドレス: </dt>
        <dd><?=e($_POST['email']) ?></dd>
        <dt>郵便番号: </dt>
        <dd><?=e($_POST['zip']) ?></dd>
        <dt>性別: </dt>
        <dd><?=e($_POST['sex']) ?></dd>
        <dt>年齢: </dt>
        <dd><?=e($_POST['age']) ?></dd>
        <dt>ご使用のOS: </dt>
        <dd>
        <?php
            if (isset($_POST['os'])) {
                print(e(implode(',', $_POST['os'])));
            }
        ?>
        </dd>
        <dt>名前: </dt>
        <dd><?=e($_POST['name']) ?></dd>
        <dt>サイトへのご意見: </dt>
        <dd><?=e($_POST['memo']) ?></dd>
        <dt>アンケート番号: </dt>
        <dd><?=e($_POST['quest_num']) ?></dd>

    </dl>
</body>
</html>