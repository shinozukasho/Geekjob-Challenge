<form action = "pdo7.php" method = "post">
name:<input type = "text" name = "name">
<input type = "submit">
<?php
$word=$_POST(name); 
//�ڑ���������
$dns  = 'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
//PDO �I�u�W�F�N�g�쐬
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL���쐬
$sql  = "SELECT name profiles WHERE name LIKE '%$word%'"; 
$sql .= "SELECT * FROM profiles WHERE name LIKE '%$word%'";
//SQL����PDO�I�u�W�F�N�g�ɐݒ�
$pdo_st =$pdo_obj -> prepare($sql);
//SQL���̎��s
$pdo_st -> execute();
//��ʂɕ\��
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB�ؒf
$pdo_obj = null;