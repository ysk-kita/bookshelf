<?php

/** 指定したidとパスワードに一致したアカウントを取得する */
function get_account($pdo, $account_id, $password){
  $sql = file_get_contents("sql/process/account/get_account.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':account_id', $account_id, PDO::PARAM_STR);
  $prepare->bindValue(':password', $password, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetch();
}

/** 指定したアカウントIDが存在していれば1,しなければ0を返す */
function get_account_count($pdo, $account_id){
  $sql = file_get_contents("sql/process/account/get_account_count.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':account_id', $account_id, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchColumn();
}

/** アカウントを登録する */
function insert_account($pdo, $account_id, $userName, $password){
  $sql = file_get_contents("sql/process/account/insert_account.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':account_id', $account_id, PDO::PARAM_STR);
  $prepare->bindValue(':user_name', $userName, PDO::PARAM_STR);
  $prepare->bindValue(':password', $password, PDO::PARAM_STR);
  return $prepare->execute();
}

?>
