<?php
session_start();

// ログインセッションを削除
unset($_SESSION['userName']);
unset($_SESSION['userId']);

// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();
?>
