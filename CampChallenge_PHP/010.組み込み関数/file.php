<?php

// sample.txtから情報を読み出す処理
$fp = fopen('sample.txt', 'r');
if ($fp != false) {
    echo fgets($fp);
    fclose($fp);
}