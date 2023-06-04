<?php
$dansu = $_GET['dansu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($dansu)) {
        for ($i = 1; $i <= $dansu; $i++) {
            for ($j = 0; $j < $dansu - $i; $j++) {
                print('□');
            } 
            for ($j = 0; $j < $i * 2 - 1; $j++) {
                print('■');
            }
            for ($j = 0; $j < $dansu - $i; $j++) {
                print('□');
            } 
            print('<br>');
        }
    }
?>
<form action="" method="get">
    <label for="dansu">ピラミッドの段数: </label>
    <input type="number" name="dansu" id="dansu" min="1">
    <input type="submit" value="送信">
</form>
</body>
</html>