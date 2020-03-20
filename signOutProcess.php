<?php
session_start();

// ログインセッションを削除
unset($_SESSION['signInUser']);

// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();
?>
