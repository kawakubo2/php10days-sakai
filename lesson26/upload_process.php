<?php
print('<pre>');
print_r($_FILES);
print('</pre>');
/*
$ext = pathinfo($_FILES['upfile']['name']);
$perm = ['gif', 'jpg', 'jpeg', 'png'];

if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
    $msg = [
        UPLOAD_ERR_INI_SIZE => 'php.iniのupload_max_filesize制限を越えています。',
        UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZE制限を越えています。',
        UPLOAD_ERR_PARTIAL => 'ファイルの一部しかアップロードされていません。',
        UPLOAD_ERR_NO_FILE => 'ファイルはアップロードされませんでした。',
        UPLOAD_ERR_NO_TMP_DIR => '一時保存フォルダが存在しません。',
        UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました。',
        UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました。'
    ];
    $err_msg = $msg[$_FILES['upfile']['error']];
} else if (!in_array(strtolower($ext['extension']), $perm)) {
    $err_msg = '画像以外のファイルはアップロードできません。';
} else if (!@getimagesize($_FILES['upfile']['tmp_name'])) {
    $err_msg = 'ファイルの内容が画像ではありません。';
} else {
    $src = $_FILES['upfile']['tmp_name'];
    $dest = mb_convert_encoding($_FILES['upfile']['name'], 'SJIS-WIN', 'UTF-8');
    if (!move_uploaded_file($src, '../doc/' . $dest)) {
        $err_msg = 'アップロード処理に失敗しました。';
    }
}
if (isset($err_msg)) {
    die("<p>{$err_msg}</p>");
}
header('Location: http://localhost:3000/lesson26/upload.php');
*/