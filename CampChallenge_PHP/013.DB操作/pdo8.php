<form action = "pdo8.php" method = "post">
name:<input type = "text" name = "name">
<input type = "submit">
<?php
//�ڑ���������
$dns  = 'mysql:host=localhost;';
$dns .= 'dbname=Challenge_db;';
$dns .= 'charset=utf8';
//PDO �I�u�W�F�N�g�쐬
$pdo_obj = new PDO($dns,'shinozuka','20612061At');
//SQL���쐬
$sql  = "INSERT INTO profiles (name) VALUE (:name) WHERE profilesID = 1";
//SQL����PDO�I�u�W�F�N�g�ɐݒ�
$pdo_st =$pdo_obj -> prepare($sql);
//�p�����[�^�ɑ��
$pdo_st->bindParam(':name', '$_POST',PDO::PARAM_STR);
//SQL���̎��s
$pdo_st -> execute();
//��ʂɕ\��
$datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
var_dump($datas);
//DB�ؒf
$pdo_obj = null;