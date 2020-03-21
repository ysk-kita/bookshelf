<?php
session_start();
// pdoインポート
include("components/database_access/accessor.php");
include("components/database_access/accounts.php");
include("components/constants.php");

$id = $_POST['userId'];
$password = $_POST['password'];
$userName = empty($_POST['userName']) ? $id : $_POST['userName'];
$terms = $_POST['terms'];

if(empty($id) || empty($password)){
  // 必須パラメータ未入力のため戻す
  $_SESSION['inputId'] = $id;
  $_SESSION['userName'] = $userName;
  $_SESSION['terms'] = $terms;
  $_SESSION['errorMsg'] = '未入力の項目があります。';
  header('Location:/signUp.php');
  exit();
}

// 登録重複チェック
try {
  $checkResult = get_account_count($mysql, $id);
} catch (PDOException $e) {
  $error = $e->getMessage();
}

if($checkResult == $USER_EXIST){
  // 既存のIDと重複しているためページを戻す
  $_SESSION['inputId'] = $id;
  $_SESSION['userName'] = $userName;
  $_SESSION['terms'] = $terms;
  $_SESSION['errorMsg'] = 'このIDは既に使われています。';
  header('Location:/signUp.php');
  exit();
}

/* web公開に辺りサインアップ機能を無効にする

// DB登録を実行
try {
  insert_account($mysql, $id, $userName, $password);
} catch (PDOException $e) {
  $error = $e->getMessage();
  var_dump($error);
}
$_SESSION['userName'] = $userName;
$_SESSION['userId'] = $id;
*/

$_SESSION['userName'] = 'testユーザ';
$_SESSION['userId'] = 'test001';

// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();

?>
