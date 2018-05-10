<form action = "pdo11.php" method = "post">
name:<input type = "text" name = "name">
age:<input type = "text" name = "age">
birthday:<input type = "text" name = "birthday">
<input type = "submit">
<?php
$name =  htmlspecialchars($_POST['name'],ENT_QUOTES);
$age =   htmlspecialchars($_POST['age'],ENT_QUOTES);
$birthday =  htmlspecialchars($_POST['birthday'],ENT_QUOTES);
//接続文字入力
$dns = 'mysql:host=localhost;';
$dns = 'dbname=Challenge_db;';
$dns = 'charset=utf8';
//PDO オブジェクト作成
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL文作成
$sql = "SELECT * FROM profiles WHERE name LIKE '%$name%' && age LIKE '%$age%' && birthday LIKE '%$birthday%'";
//SQL文をPDOオブジェクトに設定
$pdo_st = $pdo_obj -> prepare($sql);
//SQL文の実行
$pdo_st -> execute();
//画面に表示
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB切断
$pdo_obj = null;