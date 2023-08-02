<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ファイルのアップロード</h3>
    <form action="upload_process.php" method="post"
        enctype="multipart/form-data">
        <input type="hidden" name="max_file_size" value="1000000" />
        <input type="file" name="upfile" id="upfile" size="50" />
        <input type="submit" value="アップロード" />
    </form>
</body>
</html>