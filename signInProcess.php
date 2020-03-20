<?php
session_start();

$id = $_POST['signInId'];
$password = $_POST['password'];

validation_signIn($_POST);

try {
  $mysql = new PDO('mysql:host=localhost; dbname=kitabooks; charset=utf8', 'root', '',
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    )
  );
  $sql = file_get_contents("sql/process/get_account.sql");

  $prepare = $mysql->prepare($sql);
  $prepare->bindValue(':account_id', $id, PDO::PARAM_STR);
  $prepare->bindValue(':password', $password, PDO::PARAM_STR);
  $prepare->execute();
  $result = $prepare->fetch();
} catch (PDOException $e) {
  $error = $e->getMessage();
}

var_dump($result);

/*
if(!isset($result)){
  // ログイン処理失敗のためエラーメッセージを出してログインページに戻す
  header('Location:/signIn.php');
}


$_SESSION['signInUser'] = $result;

// ログイン処理に成功したのでtopに遷移させる
header('Location:/index.php');
exit();
*/
?>
