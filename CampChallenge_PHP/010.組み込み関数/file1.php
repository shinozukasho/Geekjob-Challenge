<?php

// sample.txt‚Öî•ñ‚ð‘‚«ž‚Þˆ—
$fp = fopen('sample.txt', 'w');
if ($fp != false) {
    fwrite($fp, 'My name is Shinozuka.');
    fclose($fp);
}