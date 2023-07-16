<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP入門教室</title>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const name = document.getElementById('name');
            const len = document.getElementById('len-check');
            name.addEventListener('change', e => {
                const len = e.target.value;
                len.textContent = len + '文字';
            })          
        })
    </script>
</head>
<body>
    <h3>アンケート</h3>
    <form action="wizard2.php" method="post">
        <div class="container">
            <label for="name">名前: </label><br>
            <input type="text" name="name" id="name" value="<?=$_SESSION['name'] ?>"><br>
            <span id="len-check"></span>
        </div>
        <div class="container">
            <label for="email">メールアドレス: </label><br>
            <input type="email" name="email" id="email" value="<?=$_SESSION['email'] ?>">
        </div>
        <div class="container">
            <label for="zip">郵便番号: </label><br>
            <input type="text" name="zip" id="zip" value="<?=$_SESSION['zip'] ?>">
        </div>
        <div class="container">
            性別: <br>
    <?php
        $sexes = ['男性', '女性', 'その他'];
        foreach ($sexes as $sex) {
    ?>
        <label>
            <input type="radio" name="sex" value="<?=$sex ?>" 
                <?=($_SESSION['sex'] === $sex) ? 'checked': '' ?> ><?=$sex ?>
        </label>
    <?php
        }
    ?>
        </div>
        <input type="submit" value="次へ">
    </form>
</body>
</html>