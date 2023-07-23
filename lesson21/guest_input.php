<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP入門教室</title>
</head>
<body>
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