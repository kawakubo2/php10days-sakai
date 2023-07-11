<?php
/*
    implode関数 配列 ---> 文字列
    implode(区切り文字, 配列) 第2引数の配列が存在しないとエラーとなる。
    isset($_POST['os'])は$_POSTという名前の連想配列に'os'というキーがあるか調べる
    'os'というキーが存在すると配列も存在するのでimplode関数が使用できる。
    'os'というキーが存在しなければ配列も存在しないのでimplode関数を使用しない。
*/
$langs = ['C++', 'Rust', 'Go', 'Julia', 'Java'];
$str = implode(',', $langs);
print($str . '<br>');