<?php
require_once '../Encode.php';
session_start();
if (isset($_POST['age']))       $_SESSION['age']       = $_POST['age'];
if (isset($_POST['os']))        $_SESSION['os']        = $_POST['os'];
if (isset($_POST['memo']))      $_SESSION['memo']      = $_POST['memo'];
if (isset($_POST['quest_num'])) $_SESSION['quest_num'] = $_POST['quest_num'];

/////////////////////////////////////////////////////////////////////////
// 入力チェック(バリデーション)
/////////////////////////////////////////////////////////////////////////
// エラーメッセージ格納用の配列
$errors = [];
foreach ($_SESSION as $key => $value) {
    if (is_array($value)) {
        $value = implode('', $value);
    }
    if (!mb_check_encoding($value)) {
        $errors[] = '文字コードに誤りがあります。';
        break;
    }
}
/*
空白文字をtrim関数で削除した結果が空文字列と等しい場合、
未入力とみなしエラーとする。
半角空白を1個以上入力してチェックをすり抜けることを防ぐ
意味もある。日本の場合、全角空白もあるので、空文字列に
置換した後にtrim関数を使用したほうがよい。
*/
if (trim(str_replace('　', '', $_SESSION['name'])) === '') {
    $errors[] = '名前はかならず入力してください。';
}
/*
mb_strlenはマルチバイト文字の個数を調べる。strlenを使用すると
バイト数を返すので、文字数を調べるときは使用しない。
マルチバイト文字は日本語、中国語、韓国語など1バイトで表現できず
複数バイトで1文字を表す文字のこと
*/
if (mb_strlen($_SESSION['name']) > 50) {
    $errors[] = '名前は50文字以内で入力してください。';
}
if (!preg_match('/^\w+([-+.\']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/iD', $_SESSION['email'])) {
    $errors[] = '不正なメールアドレスです。';
}
if (!preg_match('/^[0-9]{3}-[0-9]{4}$/', $_SESSION['zip'])) {
    $errors[] = '不正な郵便番号です。';
}
if (!ctype_digit($_SESSION['age'])) {
    $errors[] = '年齢は整数値で入力してください。';
}
if ($_SESSION['age'] < 10 || $_SESSION['age'] > 50) {
    $errors[] = '年齢は10～50の間で入力してください。';
}
$opts = ['win', 'mac', 'linux'];
if (isset($_SESSION['os'])) {
    foreach ($_SESSION['os'] as $os) {
        if (!in_array($os, $opts)) {
            $errors[] = 'osは決められた選択肢の中から選択してください。';
            break;
        }
    }
}
if (!isset($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    die('不正なアクセスが行われました。');
}
if (count($errors) > 0) {
    die(implode('<br />', $errors) .
        '<br />[<a href="wizard1.php">戻る</a>]');
}
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