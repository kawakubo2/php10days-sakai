<?php
function show_files($dir = '.') {
    $files = @opendir($dir) or die('ファイルが開けませんでした。');
    print("<ul>");
    while ($file = readdir($files)) {
        $path = $dir . '/' . $file;
        if ($file === '.' || $file === '..') continue;
        if (is_dir($path)) {
            show_files($path);
        } else {
            print("<li><a href='{$path}'>{$path}</a></li>");
        }
    }
    print("</ul>");
}
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
    <h1>10でおぼえるPHP入門教室</h1>
    <?php show_files(); ?>
</body>
</html>