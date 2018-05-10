<form action = "pdo10.php" method = "post">
profilesID:<input type = "text" name = "profilesID">
<input type = "submit">
<?php
//接続文字入力
try {
    $dns  = 'mysql:host=localhost;';
    $dns .= 'dbname=Challenge_db;';
    $dns .= 'charset=utf8';
    //PDO オブジェクト作成
    $pdo_obj = new PDO($dns,'shinozuka','20612061At');
    //SQL文作成
    $profilesID = var_dump($_POST);
    echo '<br>';
    $sql  = "UPDATE profiles SET name = "yamaguchi",tel = "090-9999-9999",age = 46,birthday = "1972-1-10" ";
    $sql .= "WHERE profilesID = $profilesID"; 
    $sql = "SELECT * FROM profiles WHERE profilesID = 1";
    //SQL文をPDOオブジェクトに設定
    $pdo_st =$pdo_obj -> prepare($sql);
    //SQL文の実行
    $pdo_st -> execute();
    //画面に表示
    $datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
    var_dump($datas);
    //DB切断
    $pdo_obj = null;
} catch (PDOException $pdo_ex) {
    echo '失敗しました。' . $pdo_ex->getMessage();
}