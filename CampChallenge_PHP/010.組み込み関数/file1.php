<?php

// sample.txtへ情報を書き込む処理
$fp = fopen('sample.txt', 'w');
if ($fp != false) {
    fwrite($fp, 'My name is Shinozuka.');
    fclose($fp);
}