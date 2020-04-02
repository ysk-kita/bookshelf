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
  $shelf_id = '1'; // 暫定機能のため、一旦は本棚1にのみ追加できるようにする

  if(isset($_POST['bookId'])){
    $bookId = $_POST['bookId'];
    deleteFunc($mysql, $bookId, $userId, $shelf_id);

  } else {
    $bookIdList = $_POST['bookIdList'];
    foreach($bookIdList as $bookId){
      deleteFunc($mysql, $bookId, $userId, $shelf_id);
    }
  }
  header("HTTP/1.1 200 OK");
  exit();
} else {
  header("HTTP/1.1 502 Bad Gateway");
  exit();
}

function deleteFunc($mysql, $bookId, $userId, $shelf_id){
  try {
    delete_bookmarks($mysql, $userId, $bookId, $shelf_id);
  } catch (PDOException $e) {
    header("HTTP/1.1 500 Internal Server Error");
    exit();
  }
}


?>
