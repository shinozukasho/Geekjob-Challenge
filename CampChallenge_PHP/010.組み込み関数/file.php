<?php

// sample.txt�������ǂݏo������
$fp = fopen('sample.txt', 'r');
if ($fp != false) {
    echo fgets($fp);
    fclose($fp);
}