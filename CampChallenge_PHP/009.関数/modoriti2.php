<?php
// 自分のプロフィールを配列にして返却する関数
function make_profile() {
$infos = array();
$infos['ID'] = 1000;
$infos['name'] = 'shinozuka';
$infos['birthday'] = '1994/3/29';
$infos['address'] = 'kanagawa';
return $infos;
}

// プロフィール関数を呼び出し（戻り値の受け取り）
$myprof = make_profile();
echo $myprof['name'];//nameの利用
echo $myprof['birthday']; // birthdayの利用
echo $myprof['address'];//addressの利用