<?php
try{
    //接続文字入力
    $dns =  'mysql:host=localhost;';
    $dns .= 'dbname=Challenge_db;';
    $dns .= 'charset=utf8';
    //PDO オブジェクト作成
    $pdo_obj = new PDO($dns,'shinozuka','20612061At');
    //SQL文作成
    $sql  = "INSERT INTO profiles(profilesID,name,tel,age,birthday) VALUE(:id, :name, :tel, :age, :birthday)";
    //SQL文をPDOオブジェクトに設定
    $pdo_st =$pdo_obj -> prepare($sql);
    //パラメータに値を入力
    $pdo_st->bindParam(':id',$id,PDO::PARAM_INT);
    $pdo_st->bindParam(';name',$name,PDO::PARAM_STR);
    $pdo_st->bindParam(':tel',$tel,PDO::PARAM_STR);
    $pdo_st->bindParam(';age',$age,PDO::PARAM_INT);
    $pdo_st->bindParam(':birthday',$birthday,PDO::PARAM_STR);
    $id = 6;
    $name = "yamaguchi";
    $tel = "090-9999-9999";
    $age = 46;
    $birthday = "1972-1-10";
    //SQL文の実行
    $pdo_st -> execute();
    //DB切断
    $pdo_obj = null;
} catch (PDOException $pdo_ex){
    echo 'connect failed.' . $pdo_ex->getMessage();
}