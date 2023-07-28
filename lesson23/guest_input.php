<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP入門教室</title>
</head>
<body>
    <a href="./guest_read.php" class="btn btn-secondary ml-2 mt-2">一覧</a>
    <h3>ゲストブック(書き込み)</h3>
    <?php
        if (isset($_SESSION['message'])) {
            print("<p style='color: blue;'>{$_SESSION['message']}</p>");
            unset($_SESSION['message']);
        }
    ?>
    <form action="guest_write.php" method="post">
        <div class="container">
            <label for="name">お名前: </label>
            <input type="text" name="name" id="name" size="20" maxlength="30" />
        </div>
        <div class="container">
            <label for="message">メッセージ: </label>
            <input type="text" name="message" id="message" size="70" maxlength="255" />
        </div>
        <input type="submit" value="送信" />
    </form>
</body>
</html>