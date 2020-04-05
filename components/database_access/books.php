<?php

/** ユーザ事にブックマークした本を取得 */
function get_bookmarks_list($pdo, $user_id, $shelf_id){
  $sql = file_get_contents("sql/process/books/get_bookmarks_list.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':user_id', $user_id, PDO::PARAM_STR);
  $prepare->bindValue(':shelf_id', $shelf_id, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchAll();
}

/** 全てのジャンルの本を取得 */
function get_all_genre_books($pdo){
  $sql = file_get_contents("sql/process/books/get_all_genre_books.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->execute();
  return $prepare->fetchAll();
}

/** 指定したジャンルの本を取得 */
function get_genre_books($pdo, $genre_id){
  $sql = file_get_contents("sql/process/books/get_genre_books.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':genre_id', $genre_id, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchAll();
}

/** 指定した本の情報を取得 */
function get_book_info($pdo, $book_id){
  $sql = file_get_contents("sql/process/books/get_book_info.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':book_id', $book_id, PDO::PARAM_INT);
  $prepare->execute();
  return $prepare->fetchObject();
}

/** 指定した本の章リストを取得 */
function get_book_detail_list($pdo, $book_id){
  $sql = file_get_contents("sql/process/books/get_book_detail_list.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':book_id', $book_id, PDO::PARAM_INT);
  $prepare->execute();
  return $prepare->fetchAll();
}

/** 指定した本の章の中身を取得 */
function get_book_episode($pdo, $book_id, $episode_no){
  $sql = file_get_contents("sql/process/books/get_book_episode.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':book_id', $book_id, PDO::PARAM_INT);
  $prepare->bindValue(':episode_no', $episode_no, PDO::PARAM_INT);
  $prepare->execute();
  return $prepare->fetchObject();
}

function get_last_episode_no($pdo, $book_id){
  $sql = file_get_contents("sql/process/books/get_last_episode_no.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':book_id', $book_id, PDO::PARAM_INT);
  $prepare->execute();
  return $prepare->fetchColumn();
}

?>
