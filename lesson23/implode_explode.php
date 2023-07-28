<?php
$s = "PHP,Python,C++,Go,Rust,Java";
$ary = explode(',', $s); // 文字列から配列へ
print('<pre>');
print_r($ary);
print('</pre>');
$s2 = implode('-', $ary); // 配列から文字列へ
print($s2);