<?php
abstract class base{
     abstract function load(){
     //接続文字入力
     $dns =  'mysql:host=localhost;';
     $dns .= 'dbname=Challenge_db;';
     $dns .= 'charset=utf8';
     //PDO オブジェクト作成
     $pdo_obj = new PDO($dns,'shinozuka','20612061At');
     //SQL文作成
     $sql  = "SELECT * FROM c";
     $sql. = "SELECT * FROM d";
     //SQL文をPDOオブジェクトに設定
     $pdo_st = $pdo_obj -> prepare($sql);
     //SQL文の実行
     $pdo_st -> execute();
     //画面に表示
     $datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
     var_dump($datas);
     //DB切断
     $pdo_obj = null;
}
     public function show(){
}
}

class Human extends base{
    private $table;
}

class Station extends base{
    private $table;
}
