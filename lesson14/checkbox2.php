<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $defs = ['name' => '山田太郎', 'favorite_vegetables' => ['potato', 'eggplant']];
    $vegetables = ['pumpkin' => 'かぼちゃ', 'potato' => 'じゃがいも', 'cucumber' => 'きゅうり', 'eggplant' => 'なす'];
?>
    <form action="">
        <div class="container">
        <?php foreach ($vegetables as $en_v => $ja_v) { ?>
            <label><input type="checkbox" name="vegetable" value="<?=$en_v ?>"
                <?=in_array($en_v, $defs['favorite_vegetables']) ? 'checked': '' ?> ><?=$ja_v ?></label>
        <?php } ?>
        </div>
    </form>
</body>
</html>