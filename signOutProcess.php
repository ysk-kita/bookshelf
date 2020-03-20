<?php
session_start();

// ログインセッションを削除
unset($_SESSION['signInId']);

// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();
?>
