<?php
$number = htmlspecialchars($_GET['number'],ENT_QUOTES);
function hai($num){
function amari($kazu,$sosuu){            //�]����o���֐�
$amari = ($kazu %= $sosuu);
return $amari;
}
echo "number $num";                      //����\��
$kazu = $num;
$so = array(2,3,5,7);        //�f����z��\��
for($i=0; $i<4; $i++){                  //#�����J�n
$sosuu = $so[$i];                        //�f���̔z�񂩂珇�Ԃ�
$settei = array($kazu,$sosuu);
$soinnsuu = array();

while(amari($kazu,$sosuu) == 0){         //�]�肪�o��܂�
  $kazu = $kazu / $sosuu;                //������
  $settei[0] = $kazu;                    //�����Z�[�u����
  $soinnsuu[] = $sosuu;                  //�f�����ɑf���ǉ���������
}
$kazu = $settei[0];                      //�f���Ŋ����������̐��������p��
$moji = strlen($settei[0]);              //�������̕ϐ�
echo '<br>';
print_r($soinnsuu);                      //�f������\��
}                                        //#�����I���
if($moji > 1){                           //�]�肪2���ȏ�̎�
  echo '<br>';
  echo "amari $settei[0]";               //�]���\��
}
}
hai($number);