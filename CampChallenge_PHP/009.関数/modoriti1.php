<?php

// 自己紹介するユーザー定義関数
function myprofile() {
$infos = array();
$infos['name'] = "shinozuka<br>";
$infos['birthday'] = "1994/3/29<br>";
$infos['hobby'] = "I like sports.<br>";
return $infos;
}
$myprof = myprofile();
echo $myprof['name'];
echo $myprof['birthday'];
echo $myprof['hobby'];
if($myprof){
  echo "true";
} else {
  echo "false";
}

for ($i = 0; $i < 10; $i++) {
myprofile();
}