<?php

// 20回8をかける処理
$num = 1;
for ($i = 1; $i <= 20; $i++) {
    $num = $num * 8;
}
echo $num;

// 回数を把握するための変数：$i=1（初期値は1）
// 繰り返す条件：$i<=10（$iが10以下の場合繰り返す）
// １回毎の増減：$i++（１回毎に$iに+1する