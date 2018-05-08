<form action = "pdo8.php" method = "post">
name:<input type = "text" name = "name">
<input type = "submit">
<?php
//接続文字入力
$dns  = 'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
//PDO オブジェクト作成
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL文作成
$sql  = "INSERT INTO profiles (name) VALUE (:name) WHERE profilesID = 1";
//SQL文をPDOオブジェクトに設定
$pdo_st =$pdo_obj -> prepare($sql);
//パラメータに代入
$pdo_st->bindParam(':name', '$_POST',PDO::PARAM_STR);
//SQL文の実行
$pdo_st -> execute();
//画面に表示
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB切断
$pdo_obj = null;