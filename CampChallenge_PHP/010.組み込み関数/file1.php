<?php

// sample.txt�֏����������ޏ���
$fp = fopen('sample.txt', 'w');
if ($fp != false) {
    fwrite($fp, 'My name is Shinozuka.');
    fclose($fp);
}