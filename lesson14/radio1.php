<?php
$defs = ['name' => '山田太郎', 'blood' => 'B'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <div>
            <input type="radio" name="bloodtype1" value="A">A型
            <input type="radio" name="bloodtype1" value="B" checked>B型
            <input type="radio" name="bloodtype1" value="O">O型
            <input type="radio" name="bloodtype1" value="AB">AB型
        </div>
        <hr>
<?php
    $bloodtypes = ['A', 'B', 'O', 'AB'];
?>
        <div>
<?php foreach ($bloodtypes as $b) { ?>
            <label><input type="radio" name="bloodtype2" value="<?=$b ?>" 
                <?=($defs['blood'] === $b) ? 'checked': '' ?>><?=$b ?>型</label>
<?php } ?>
        </div>
    </form>
</body>
</html>