<form action = "pdo11.php" method = "post">
name:<input type = "text" name = "name">
age:<input type = "text" name = "age">
birthday:<input type = "text" name = "birthday">
<input type = "submit">
<?php
$name =  htmlspecialchars($_POST['name'],ENT_QUOTES);
$age =   htmlspecialchars($_POST['age'],ENT_QUOTES);
$birthday =  htmlspecialchars($_POST['birthday'],ENT_QUOTES);
//�ڑ���������
$dns = 'mysql:host=localhost;';
$dns = 'dbname=Challenge_db;';
$dns = 'charset=utf8';
//PDO �I�u�W�F�N�g�쐬
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL���쐬
$sql = "SELECT * FROM profiles WHERE name LIKE '%$name%' && age LIKE '%$age%' && birthday LIKE '%$birthday%'";
//SQL����PDO�I�u�W�F�N�g�ɐݒ�
$pdo_st = $pdo_obj -> prepare($sql);
//SQL���̎��s
$pdo_st -> execute();
//��ʂɕ\��
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB�ؒf
$pdo_obj = null;