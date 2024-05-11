<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $pref = ['40' => '福岡県', '41' => '佐賀県', '42' => '長崎県', '43' => '大分県'];
?>
<select name="pref" id="pref">
<?php foreach($pref as $code => $name) { ?>
    <option value="<?=$code ?>"><?=$name ?></option>
<?php } ?>
</select>
</body>
</html>