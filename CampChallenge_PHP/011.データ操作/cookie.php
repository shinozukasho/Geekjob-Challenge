<?php

// ���[�U�[�̃A�N�Z�X������ۑ����鏈��
// ���[�U�[�̂P��ڂ̖K��
$access_time = date('Y�Nm��d��');
setcookie('LastLoginDate', $access_time);

// ���[�U�[�̃A�N�Z�X������\�����鏈��
echo 'LastLoginDate:' . $_COOKIE['LastLoginDate'];