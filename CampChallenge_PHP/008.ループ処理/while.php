<?php

// $keyが「100」以下になるまで繰り返す
$key = '1000';
$count = 0;
while($key > '100') {
    $key = $key / '2';
    $count++;
}
echo $count . 'times';