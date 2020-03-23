<?php

/** 指定したジャンルの本を取得 */
function get_genre_list($pdo){
  $sql = file_get_contents("sql/process/genre/get_genre_list.sql");
  $prepare = $pdo->prepare($sql);
  $prepare->execute();
  return $prepare->fetchAll();
}


?>
