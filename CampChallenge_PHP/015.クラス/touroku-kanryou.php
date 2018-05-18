
<form action = "menu.php" method = "get">
<input type = "submit" value = "menu">
</form>
<?php

$name = htmlspecialchars($_GET['comment'],ENT_QUOTES);
$price = htmlspecialchars($_GET['price'],ENT_QUOTES);
$etc = htmlspecialchars($_GET['etc'],ENT_QUOTES);
$_SESSION['comment'] = $name;
$_SESSION['price'] = $price;
$_SESSION['etc'] = $etc;
echo "以下の内容で登録しました。";
echo '<br>';
echo $_SESSION['comment'];
echo '<br>';
echo $_SESSION['price'];
echo '<br>';
echo $_SESSION['etc'];