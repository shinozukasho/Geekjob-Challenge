<?php

// $key‚ªu100vˆÈ‰º‚É‚È‚é‚Ü‚ÅŒJ‚è•Ô‚·
$key = '1000';
$count = 0;
while($key > '100') {
    $key = $key / '2';
    $count++;
}
echo $count . 'times';