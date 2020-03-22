<?php

/** 指定したidとパスワードに一致したアカウントを取得する */
function get_bookmarks_list($pdo, $account_id, $shelf_id){
  $sql = file_get_contents("sql/process/books/get_bookmarks_list.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':account_id', $account_id, PDO::PARAM_STR);
  $prepare->bindValue(':shelf_id', $shelf_id, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchAll();
}


?>
