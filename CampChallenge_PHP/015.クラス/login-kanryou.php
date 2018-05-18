<form action = "menu.php" method = "get">
<input type = "submit" value = "menu">
<?php

$name = htmlspecialchars($_GET['comment'],ENT_QUOTES);
$pass = htmlspecialchars($_GET['pass'],ENT_QUOTES);

if($name == "yamaguchi" && $pass == '9999'){
echo '<br>';
echo "ログインしました。";
}
else{
echo "ログインできませんでした。";
}
