<?php

/** 指定したジャンルの本を取得 */
function get_genre_list($pdo){
  $sql = file_get_contents("sql/process/genre/get_genre_list.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->execute();
  return $prepare->fetchAll();
}

/** ジャンルパスからジャンル名を取得 */
function get_genre_name($pdo, $genre_path){
  $sql = file_get_contents("sql/process/genre/get_genre_name.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->bindValue(':genre_path', $genre_path, PDO::PARAM_STR);
  $prepare->execute();
  return $prepare->fetchColumn();
}


?>
