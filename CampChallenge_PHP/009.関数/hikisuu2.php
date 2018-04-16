<?php
// ‚PŒÂ–Ú‚Æ‚QŒÂ–Ú‚ÌÏ‚ğo‚µ‚Ü‚·BB
// ‚RŒÂ–Ú‚ª"true"‚ÌAÏ‚ğ“ñæ‚µ‚Ü‚·B
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