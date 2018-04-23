<?php

// セッション開始
session_start();

// セッションに情報を入れる。
$_SESSION['message'] = 
$access_time = date('Y年m月d日');
setcookie('LastLoginDate', $access_time);

// ユーザーのアクセス日時を表示する処理
echo 'Last Login Date:' . $_COOKIE['LastLoginDate'];

// セッションからデータを取り出す
echo $_SESSION['message'];
