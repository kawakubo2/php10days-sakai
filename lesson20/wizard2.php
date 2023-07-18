<?php
require_once '../Encode.php';
session_start();
// ポストデータをセッションに保存
if (isset($_POST['name']))  $_SESSION['name'] = $_POST['name'];
if (isset($_POST['email'])) $_SESSION['email'] = $_POST['email'];
if (isset($_POST['sex']))   $_SESSION['sex'] = $_POST['sex'];
if (isset($_POST['zip']))   $_SESSION['zip'] = $_POST['zip'];

$token = md5(uniqid(mt_rand(), TRUE));
$_SESSION['token'] = $token;
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
    <form action="wizard3.php" method="post">
        <div>
            <label for="age">年齢: </label><br>
            <select name="age" id="age">
        <?php
            for ($i = 10; $i <= 50; $i += 10) { // $i += 10 ---> $i = $i + 10
        ?>
                <option value="<?=$i ?>"
                    <?=($i === (int)$_SESSION['age']) ? 'selected': '' ?> ><?=$i ?>代</option>
        <?php
            }
        ?>
            </select>
        </div>
        <div class="container">
            ご使用のOS: <br>
        <?php
            $oss = ['win' => 'Windows', 'mac' => 'Mac', 'linux' => 'Linux'];
            foreach ($oss as $k_os => $v_os) { ?>
                <label>
                    <input type="checkbox" name="os[]" value="<?=$k_os ?>"
            <?php 
                if(isset($_SESSION['os'])) { 
                    if (in_array($k_os, $_SESSION['os'])) {
                        print('checked');
                    } 
                } ?>
                /><?=$v_os ?></label>
        <?php
            }
        ?>
        </div>
        <div class="container">
            <label for="memo">サイトへのご意見: </label><br>
            <textarea rows="5" cols="30" id="memo" 
                name="memo"><?=e($_SESSION['memo']) ?></textarea>
        </div>
        <input type="hidden" name="quest_num" value="XXX15204" />
        <input type="hidden" name="token" value="<?=$token ?>" />
        <input type="button" value="前へ" onclick="location.href='wizard1.php'" />
        <input type="submit" value="送信" />
    </form>
</body>
</html>