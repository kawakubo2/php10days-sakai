<?php
$defs = [
    'name'  => '山田太郎',
    'email' => 'yamada@wings.msn.to',
    'zip'   => '100-0000',
    'sex'   => '男性',
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
            <input type="text" name="name" id="name" value="<?=$defs['name'] ?>">
        </div>
        <div class="container">
            <label for="email">メールアドレス: </label><br>
            <input type="email" name="email" id="email" value="<?=$defs['email'] ?>">
        </div>
        <div class="container">
            <label for="zip">郵便番号: </label><br>
            <input type="text" name="zip" id="zip" value="<?=$defs['zip'] ?>">
        </div>
        <div class="container">
            性別: <br>
    <?php
        $sexes = ['男性', '女性', 'その他'];
        foreach ($sexes as $sex) {
    ?>
        <label>
            <input type="radio" name="sex" value="<?=$sex ?>" 
                <?=($defs['sex'] === $sex) ? 'checked': '' ?> ><?=$sex ?>
        </label>
    <?php
        }
    ?>
        </div>
        <div>
            <label for="age">年齢: </label><br>
            <select name="age" id="age">
        <?php
            for ($i = 10; $i <= 50; $i += 10) { // $i += 10 ---> $i = $i + 10
        ?>
                <option value="<?=$i ?>"
                    <?=($i === (int)$defs['age']) ? 'selected': '' ?> ><?=$i ?>代</option>
        <?php
            }
        ?>
            </select>
        </div>
        <div class="container">
            ご使用のOS: <br>
        <?php
            $oss = ['win' => 'Windows', 'mac' => 'Mac', 'linux' => 'Linux'];
            foreach ($oss as $k_os => $v_os) {
        ?>
            <label><input type="checkbox" name="os[]" value="<?=$k_os ?>"
                <?=in_array($k_os, $defs['os']) ? 'checked': '' ?> ><?=$v_os ?></label>
        <?php
            }
        ?>
        </div>
        <div class="container">
            <label for="memo">サイトへのご意見: </label><br>
            <textarea rows="5" cols="30" id="memo" 
                name="memo"><?=$defs['memo'] ?></textarea>
        </div>
        <input type="hidden" name="quest_num" value="XXX15204" />
        <input type="submit" value="送信" />
    </form>
</body>
</html>