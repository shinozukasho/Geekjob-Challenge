<?php

$name = htmlspecialchars($_GET['comment'],ENT_QUOTES);
$hobby = htmlspecialchars($_GET['hobby'],ENT_QUOTES);
$gender = htmlspecialchars($_GET['gender'],ENT_QUOTES);
$_SESSION['comment'] = $name;
$_SESSION['hobby'] = $hobby;
$_SESSION['gender'] = $gender;
$name[0] = $name;
$hobby[0] = $hobby;
echo $_SESSION['comment'];
echo '<br>';
echo $_SESSION['gender'];
echo '<br>';
echo $_SESSION['hobby'];