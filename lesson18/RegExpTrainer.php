<?php
session_start();
if (isset($_GET['pattern'])) $_SESSION['pattern'] = $_GET['pattern'];
if (isset($_GET['target']))  $_SESSION['target']  = $_GET['target'];

if (isset($_SESSION['pattern']) && isset($_SESSION['target'])) {
    if (preg_match($_SESSION['pattern'], $_SESSION['target'])) {
        $result = '○';
    } else {
        $result = '×';
    }
}
?> 
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>正規表現</title>
</head>
<body>
    <h1>正規表現練習ツール</h1>
    <div>判定: <span id="result"><?=isset($result) ? $result: '' ?></span></div>
    <div>
        <form method="get" action="">
            <div>
                <label for="pattern">正規表現: </label><br>
                <input type="text" name="pattern" id="pattern" size="50" 
                    value="<?=isset($_SESSION['pattern']) ? $_SESSION['pattern'] : '' ?>" />
            </div>
            <div>
                <label for="target">対象文字列: </label><br>
                <input type="text" name="target" id="target" size="70"
                    value="<?=isset($_SESSION['target']) ? $_SESSION['target']: '' ?>" />
            </div>
            <div>
                <input type="submit" value="テスト">
            </div>
        </form>
    </div>
</body>
</html>

