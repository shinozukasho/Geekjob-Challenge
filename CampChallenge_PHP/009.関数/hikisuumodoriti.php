<?php

// 引数2つ
function profile($name, $word) {
 $name[0] = 'suzuki';
 $name[1] = 'satou';
 $name[2] = 'tanaka';
}

// 検索文字
$word = 'sat';

if ($name = $word){
    echo 'true';
} else {
    echo 'false';
}
