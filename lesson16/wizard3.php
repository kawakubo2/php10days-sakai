<?php
require_once '../Encode.php';
session_start();
if (isset($_POST['age']))       $_SESSION['age']       = $_POST['age'];
if (isset($_POST['os']))        $_SESSION['os']        = $_POST['os'];
if (isset($_POST['memo']))      $_SESSION['memo']      = $_POST['memo'];
if (isset($_POST['quest_num'])) $_SESSION['quest_num'] = $_POST['quest_num'];
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
    <p>以下の内容で送信致しました。</p>
    <dl>
        <dt>名前: </dt>
        <dd><?=e($_SESSION['name']) ?></dd>
        <dt>メールアドレス: </dt>
        <dd><?=e($_SESSION['email']) ?></dd>
        <dt>郵便番号: </dt>
        <dd><?=e($_SESSION['zip']) ?></dd>
        <dt>性別: </dt>
        <dd><?=e($_SESSION['sex']) ?></dd>
        <dt>年齢: </dt>
        <dd><?=e($_SESSION['age']) ?></dd>
        <dt>ご使用のOS: </dt>
        <dd>
        <?php
            if (isset($_SESSION['os'])) {
                print(e(implode(',', $_SESSION['os'])));
            }
        ?>
        </dd>
        <dt>サイトへのご意見: </dt>
        <dd><?=nl2br(e($_SESSION['memo'])) ?></dd>
        <dt>アンケート番号</dt>
        <dd><?=e($_SESSION['quest_num']) ?></dd>
    </dl>
    <div>
        <a href="wizard1.php">wizard1へ</a><br>
        <a href="wizard2.php">wizard2へ</a>
    </div>
</body>
</html>