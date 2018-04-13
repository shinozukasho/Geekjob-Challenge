<?php

$data1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$data2 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);


foreach($data1 as $value) {
foreach($data2 as $num){
    $seki = $num * $value;
echo $seki;
}
echo '<br>';
}