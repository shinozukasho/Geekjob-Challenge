<?php
try{
    //�ڑ���������
    $dns =  'mysql:host=localhost;';
    $dns .= 'dbname=Challenge_db;';
    $dns .= 'charset=utf8';
    //PDO �I�u�W�F�N�g�쐬
    $pdo_obj = new PDO($dns,'shinozuka','20612061At');
    //SQL���쐬
    $sql  = "INSERT INTO profiles(profilesID,name,tel,age,birthday) VALUE(:id, :name, :tel, :age, :birthday)";
    //SQL����PDO�I�u�W�F�N�g�ɐݒ�
    $pdo_st =$pdo_obj -> prepare($sql);
    //�p�����[�^�ɒl�����
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
    //SQL���̎��s
    $pdo_st -> execute();
    //DB�ؒf
    $pdo_obj = null;
} catch (PDOException $pdo_ex){
    echo 'connect failed.' . $pdo_ex->getMessage();
}