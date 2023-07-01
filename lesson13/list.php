<?php
$data = [
    '山田太郎'   => ['男',     '1982-08-23', '北海道旭川市'],
    '横山花子'   => ['女',     '1998-02-12', '岩手県遠野市'],
    '田中一郎'   => ['男',     '1972-12-24', '神奈川県逗子市'],
    '山本久美子' => ['女',     '1983-04-20', '愛知県刈谷市'],
    '鈴木次郎'   => ['男',     '1990-03-09', '滋賀県大津市'],
    '星山裕子'   => ['その他', '1987-11-15', '岡山県倉敷市'],
    '佐藤勝男'   => ['男',     '1995-07-07', '山口県萩市'],
];
?>
名簿には<?=count($data) ?>人が登録されています。
<dl>
<?php
    foreach ($data as $name => $prof) {
        $pos = mb_strpos($name, $_POST['keywd']);
        if ($pos !== FALSE) {
            switch($prof[0]) {
                case '男':
                    $img = '../images/male.gif';
                    break;
                case '女':
                    $img = '../images/female.gif';
                    break;
                default:
                    $img = '../images/other.gif';
                    break;
            }
?>
			<dt><img src="<?=$img ?>" alt="<?=$prof[0] ?>" /></dt>
        	<dt><?=$name ?></dt>
        	<dd>性別:<?=$prof[0] ?></dd>
        	<dd>生年月日:<?=$prof[1] ?></dd>
        	<dd>住所:<?=$prof[2] ?></dd>
<?php
        }
    }
?>
</dl>