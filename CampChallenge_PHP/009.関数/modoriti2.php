<?php
// �����̃v���t�B�[����z��ɂ��ĕԋp����֐�
function make_profile() {
$infos = array();
$infos['ID'] = 1000;
$infos['name'] = 'shinozuka';
$infos['birthday'] = '1994/3/29';
$infos['address'] = 'kanagawa';
return $infos;
}

// �v���t�B�[���֐����Ăяo���i�߂�l�̎󂯎��j
$myprof = make_profile();
echo $myprof['name'];//name�̗��p
echo $myprof['birthday']; // birthday�̗��p
echo $myprof['address'];//address�̗��p