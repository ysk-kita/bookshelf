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

  $bookId = $_POST['bookId'];
  $userId = $_SESSION['userId'];
  $shelf_id = '1'; // 暫定機能のため、一旦は本棚1にのみ追加できるようにする
  try {
    $result = insert_bookmarks($mysql, $userId, $bookId, $shelf_id);
  } catch (PDOException $e) {
    header("HTTP/1.1 500 Internal Server Error");
    exit();
  }
  // 登録に成功したので200を返却する
  header("HTTP/1.1 200 OK");
  exit();
} else {
  header("HTTP/1.1 502 Bad Gateway");
  exit();
}

?>
