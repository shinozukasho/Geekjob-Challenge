<?php

// $key���u100�v�ȉ��ɂȂ�܂ŌJ��Ԃ�
$key = '1000';
$count = 0;
while($key > '100') {
    $key = $key / '2';
    $count++;
}
echo $count . 'times';