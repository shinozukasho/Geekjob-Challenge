<?php
$number = htmlspecialchars($_GET['number'],ENT_QUOTES);
function hai($num){
function amari($kazu,$sosuu){            //余りを出す関数
$amari = ($kazu %= $sosuu);
return $amari;
}
echo "number $num";                      //数を表示
$kazu = $num;
$so = array(2,3,5,7);        //素数を配列表示
for($i=0; $i<4; $i++){                  //#処理開始
$sosuu = $so[$i];                        //素数の配列から順番に
$settei = array($kazu,$sosuu);
$soinnsuu = array();

while(amari($kazu,$sosuu) == 0){         //余りが出るまで
  $kazu = $kazu / $sosuu;                //割って
  $settei[0] = $kazu;                    //数をセーブして
  $soinnsuu[] = $sosuu;                  //素因数に素数追加し続ける
}
$kazu = $settei[0];                      //素数で割った処理の数を引き継ぐ
$moji = strlen($settei[0]);              //文字数の変数
echo '<br>';
print_r($soinnsuu);                      //素因数を表示
}                                        //#処理終わり
if($moji > 1){                           //余りが2桁以上の時
  echo '<br>';
  echo "amari $settei[0]";               //余りを表示
}
}
hai($number);