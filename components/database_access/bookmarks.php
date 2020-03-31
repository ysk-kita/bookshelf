<?php

/** 指定した本棚に書籍を追加する */
function insert_bookmarks($pdo, $user_id, $book_id, $shelf_id){
  $sql = file_get_contents("sql/process/bookmarks/insert_bookmarks.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':user_id', $user_id, PDO::PARAM_STR);
  $prepare->bindValue(':book_id', $book_id, PDO::PARAM_STR);
  $prepare->bindValue(':shelf_id', $shelf_id, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchAll();
}

/** 指定ユーザが指定した本をブックマークしているかを1/0で返却する */
function get_bookmarks_count($pdo, $user_id, $book_id){
  $sql = file_get_contents("sql/process/bookmarks/get_bookmarks_count.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':user_id', $user_id, PDO::PARAM_STR);
  $prepare->bindValue(':book_id', $book_id, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchColumn();
}

?>
