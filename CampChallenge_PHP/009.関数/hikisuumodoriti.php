<?php

// ����2��
function profile($name, $word) {
 $name[0] = 'suzuki';
 $name[1] = 'satou';
 $name[2] = 'tanaka';
}

// ��������
$word = 'sat';

if ($name = $word){
    echo 'true';
} else {
    echo 'false';
}
