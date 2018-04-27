<?php
try {
    $dns =  'mysql:host=localhost;';
    $dns .= 'dbname=Challenge_db;';
    $dns .= 'charset=utf8';

    $pdo_obj = new PDO($dns, 'shinozuka', '20612061At');

    $pdo_obj = null;
} catch (PDOException $pdo_ex) {
    echo '失敗しました。' . $pdo_ex->getMessage();
}