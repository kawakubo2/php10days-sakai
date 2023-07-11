<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div class="container">
            <label><input type="checkbox" name="fruits1" value="banana">バナナ</label>
            <label><input type="checkbox" name="fruits1" value="apple">リンゴ</label>
            <label><input type="checkbox" name="fruits1" value="pear">ナシ</label>
            <label><input type="checkbox" name="fruits1" value="grape">ブドウ</label>
        </div>
        <hr>
<?php
$fruits = ['banana' => 'バナナ', 'apple' => 'リンゴ', 'pear' => 'ナシ', 'grape' => 'ブドウ'];
?>
        <div class="container">
<?php foreach($fruits as $en_fruit => $ja_fruit) { ?>
            <label><input type="checkbox" name="<?=$en_fruit ?>"><?=$ja_fruit ?></label>
<?php } ?>
        </div>
    </form>
</body>
</html>