<?php
session_start();

// ポスト取得
$id = $_POST['signInId'];
$password = $_POST['password'];
$_SESSION['signInId'] = $id;

// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();
?>
