<?php
// �P�ڂƂQ�ڂ̐ς��o���܂��B�B
// �R�ڂ�"true"�̎��A�ς��悵�܂��B
function kake($num=1,$num2=5,$num3="false") {
    if($num3 == 'true'){
    $tr = $num * $num2 * $num * $num2;
    echo "$num,$num2,$num3 : $tr ";
} 
    else {
    $fa = $num * $num2 ;
    echo "$num,$num2,$num3 : $fa ";
}
}
kake(2,4,true);
echo "<br>";
kake(5,3);