<?php
session_start();
// pdoインポート
include("components/database_access/accessor.php");
include("components/database_access/bookmarks.php");

// Ajaxからの呼び出し以外では不正なアクセスとみなす
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

  // 未ログインの場合は403を返却しエラーアラートを出力させる
  if(!isset($_SESSION['userId'])){
    header("HTTP/1.1 403 Forbidden");
    exit();
  }

  $userId = $_SESSION['userId'];
  $shelfId = $_POST['shelfId'];

  if(isset($_POST['bookId'])){
    $bookId = $_POST['bookId'];
    updateFunc($mysql, $bookId, $userId, $shelfId);

  } else {
    $bookIdList = $_POST['bookIdList'];
    foreach($bookIdList as $bookId){
      updateFunc($mysql, $bookId, $userId, $shelfId);
    }
  }
  header("HTTP/1.1 200 OK");
  exit();
} else {
  header("HTTP/1.1 502 Bad Gateway");
  exit();
}

function updateFunc($mysql, $bookId, $userId, $shelfId){
  try {
    update_bookmarks($mysql, $userId, $bookId, $shelfId);
  } catch (PDOException $e) {
    header("HTTP/1.1 500 Internal Server Error");
    exit();
  }
}


?>
