<?php
$data = ['山田太郎', '横山花子', '田中一郎', '山本久美子', '鈴木次郎', '星山裕子', '佐藤勝男'];
?>
<p>名簿には<?=count($data); ?>人が登録されています。</p>
<ol>
<?php for ($i = 0; $i < count($data); $i++) { ?>
    <li><?=$data[$i] ?></li>
<?php } ?>
</ol>
