<?php
//接続文字入力
$dns  = 'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
//PDO オブジェクト作成
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL文作成
$sql  = "UPDATE profiles"; 
$sql .= "SET name = :name,age = :age,birthday = :birthday WHERE profilesID = 1";
$sql .= "SELECT * FROM profiles WHERE profilesID = 1";
//SQL文をPDOオブジェクトに設定
$pdo_st =$pdo_obj -> prepare($sql);
//パラメータに代入
$pdo_st->bindValue(':name', '松岡修造',PDO::PARAM_STR);
$pdo_st->bindValue(':age', '48',PDO::PARAM_INT);
$pdo_st->bindValue(':birthday', '1967-11-06',PDO::PARAM_STR);
//SQL文の実行
$pdo_st -> execute();
//画面に表示
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB切断
$pdo_obj = null;