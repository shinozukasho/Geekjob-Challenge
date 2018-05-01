<?php
//接続文字入力
$dns =  'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
//PDO オブジェクト作成
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL文作成
$sql = "SELECT * FROM profiles WHERE profilesID = 1";
//SQL文をPDOオブジェクトに設定
$pdo_st = $pdo_obj -> prepare($sql);
//SQL文の実行
$pdo_st -> execute();
//画面に表示
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB切断
$pdo_obj = null;