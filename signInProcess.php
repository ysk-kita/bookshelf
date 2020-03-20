<?php
session_start();
// podインポート
include("components/accessor.php");

$id = $_POST['signInId'];
$password = $_POST['password'];

try {
  $sql = file_get_contents("sql/process/get_account.sql");
  $prepare = $mysql->prepare($sql);
  $prepare->bindValue(':account_id', $id, PDO::PARAM_STR);
  $prepare->bindValue(':password', $password, PDO::PARAM_STR);
  $prepare->execute();
  $result = $prepare->fetch();
} catch (PDOException $e) {
  $error = $e->getMessage();
}

if(!$result){
  // ログイン処理失敗のためエラーメッセージを出してログインページに戻す
  $_SESSION['inputId'] = $id;
  $_SESSION['errorMsg'] =
  '<div class="uk-margin-left uk-text-danger">ユーザーIDかパスワードに謝りがあります。</div>';
  header('Location:/signIn.php');
  exit();
}

if(isset($_SESSION['inputId'])){
  unset($_SESSION['inputId']);
  unset($_SESSION['errorMsg']);
}

$_SESSION['signInUser'] = $result;
// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();

?>
