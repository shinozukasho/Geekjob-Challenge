<?php
$total = htmlspecialchars($_GET['total'],ENT_QUOTES);
$count = htmlspecialchars($_GET['count'],ENT_QUOTES);
$type = htmlspecialchars($_GET['type'],ENT_QUOTES);

echo $type ;
echo '<br>';

//�P������̒l�i�\��
$ave = $total / $count;
echo "The average price is $ave yen.";
echo '<br>';
//�|�C���g����
if($total >= 5000){
  $point1 = $total * 0.05;
  echo "You get $point1 point.";
}
else if($total >= 3000){
  $point2 = $total * 0.04;
  echo "You get $point2 point.";
}