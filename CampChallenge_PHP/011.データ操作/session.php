<?php

// �Z�b�V�����J�n
session_start();

// �Z�b�V�����ɏ�������B
$_SESSION['message'] = 
$access_time = date('Y�Nm��d��');
setcookie('LastLoginDate', $access_time);

// ���[�U�[�̃A�N�Z�X������\�����鏈��
echo 'Last Login Date:' . $_COOKIE['LastLoginDate'];

// �Z�b�V��������f�[�^�����o��
echo $_SESSION['message'];
