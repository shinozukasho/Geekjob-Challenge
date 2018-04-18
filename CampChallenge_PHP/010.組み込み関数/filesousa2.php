<?php

// ログファイル作成
touch('logfile.txt');

$start_time = date('Y/m/d H:i:s');
$fp = fopen('logfile.txt', 'w');
if ($fp != false) {
    fwrite($fp, "$start_time start<br>");
    $end_time = date('Y/m/d H:i:s');
    fwrite($fp, "$end_time end");
    fclose($fp);
}
// ログファイル読み込み
echo file_get_contents('logfile.txt');