<?php
// 渡された数字を奇数か偶数か判別します。
// ただし、数字が渡されなかった場合には、1を判別し、奇数といいます。
function kisuu($num=1) {
    if($num % '2'){
    echo "odd";
} 
    else {
    echo "even";
}
}
kisuu(2);
echo "<br>";
kisuu(5);