<?php
session_start();
// pdoインポート
include("components/database_access/accessor.php");
include("components/database_access/accounts.php");

$id = $_POST['userId'];
$password = $_POST['password'];

if(empty($id) || empty($password)){
  // パラメータ未入力のため戻す
  $_SESSION['inputId'] = $id;
  $_SESSION['errorMsg'] = 'ユーザーIDかパスワードに謝りがあります。';
  header('Location:/signIn.php');
  exit();
}

try {
  $result = get_account($mysql, $id, $password);
} catch (PDOException $e) {
  $error = $e->getMessage();
}

if(!$result){
  // ログイン処理失敗のためエラーメッセージを出してログインページに戻す
  $_SESSION['inputId'] = $id;
  $_SESSION['errorMsg'] = 'ユーザーIDかパスワードに謝りがあります。';
  header('Location:/signIn.php');
  exit();
}

$_SESSION['userName'] = $result['user_name'];
$_SESSION['userId']   = $result['user_id'];
// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();

?>
