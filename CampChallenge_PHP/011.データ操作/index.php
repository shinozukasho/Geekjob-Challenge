<?php
$name = htmlspecialchars($_GET['comment'],ENT_QUOTES);
$hobby = htmlspecialchars($_GET['mulText'],ENT_QUOTES);
$gender = htmlspecialchars($_GET['gender'],ENT_QUOTES);
echo "Your name is $name.";
echo '<br>';
echo "$gender";
echo '<br>';
echo "Your hobby is $hobby.";
