<?php
abstract class base{
     abstract function load(){
     //�ڑ���������
     $dns =  'mysql:host=localhost;';
     $dns .= 'dbname=Challenge_db;';
     $dns .= 'charset=utf8';
     //PDO �I�u�W�F�N�g�쐬
     $pdo_obj = new PDO($dns,'shinozuka','20612061At');
     //SQL���쐬
     $sql  = "SELECT * FROM c";
     $sql. = "SELECT * FROM d";
     //SQL����PDO�I�u�W�F�N�g�ɐݒ�
     $pdo_st = $pdo_obj -> prepare($sql);
     //SQL���̎��s
     $pdo_st -> execute();
     //��ʂɕ\��
     $datas = $pdo_st -> fetchAll(PDO::FETCH_ASSOC);
     var_dump($datas);
     //DB�ؒf
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
