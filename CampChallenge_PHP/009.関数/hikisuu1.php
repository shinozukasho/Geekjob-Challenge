<?php
// �n���ꂽ������������������ʂ��܂��B
// �������A�������n����Ȃ������ꍇ�ɂ́A1�𔻕ʂ��A��Ƃ����܂��B
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