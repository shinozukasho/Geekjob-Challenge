<?php

// sample.txt‚©‚çî•ñ‚ð“Ç‚Ýo‚·ˆ—
$fp = fopen('sample.txt', 'r');
if ($fp != false) {
    echo fgets($fp);
    fclose($fp);
}