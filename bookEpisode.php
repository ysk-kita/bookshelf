<?php
session_start();
// php関数定義ファイル読み込み
require("components/function.php");
include("components/database_access/accessor.php");
include("components/database_access/books.php");
include("components/database_access/bookmarks.php");

$detail = get_book_episode($mysql, $_GET['bookId'], $_GET['episodeNo']);

$isBookmarks = false;
// ブックマーク追加済み確認
if(isset($_SESSION['userId'])){
  try {
    $checkResult = get_bookmarks_count($mysql, $_SESSION['userId'], $_GET['bookId']);
  } catch (PDOException $e) {
    $error = $e->getMessage();
  }
  $isBookmarks = ($checkResult=='1') ? true : false;
}
$prevEpisode = (int)$_GET['episodeNo'] - 1;
$nextEpisode = (int)$_GET['episodeNo'] + 1;
// todo エピソード番号の最高数値を撮るsql作成
$lastEpisode = get_last_episode_no($mysql, $_GET['bookId']);

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kita-Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.js"></script>
    <script type="text/javascript" src="js/bookDetail.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body class="uk-background-cover" data-src="images/background.jpg" uk-img>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>
    <?php include("components/header_sidebar.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center">
        <div class="sm-book-episode">
          <!-- ヘッダ -->
          <div class="sm-book-episode-header">
            <h4>
              <?php
              print $detail->episode_title;
              if($isBookmarks) print '<span class="sm-bookmarks-state">★</span>';
              else print '<span class="sm-bookmarks-state">☆</span>';
              ?>
            </h4>
            <?php
              if($isBookmarks){
                print "<button class='uk-button uk-button-default' id='delete-bookmarks' bookId='{$detail->book_id}'>本棚から削除</button>";
                print "<button class='uk-button uk-button-default uk-hidden' id='add-bookmarks' bookId='{$detail->book_id}'>本棚に追加</button>";
              } else {
                print "<button class='uk-button uk-button-default uk-hidden' id='delete-bookmarks' bookId='{$detail->book_id}'>本棚から削除</button>";
                print "<button class='uk-button uk-button-default' id='add-bookmarks' bookId='{$detail->book_id}'>本棚に追加</button>";
              }
            ?>
          </div>
          <!-- ページネーション設定(上部)-->
          <div class="uk-flex uk-flex-around sm-book-episode-pagination uk-child-width-1-3">
            <div>
              <?php print "<a href='/bookEpisode.php?episodeNo=${prevEpisode}&bookId={$detail->book_id}'";
              if($prevEpisode==0) print "class='sm-link-invalid'";
              print ">前エピソード</a>"; ?>
            </div>
            <div>
              <?php print "<a href='/bookDetail.php?bookId={$detail->book_id}'>エピソード一覧</a>"; ?>
            </div>
            <div>
            <?php print "<a href='/bookEpisode.php?episodeNo=${nextEpisode}&bookId={$detail->book_id}'";
              if($detail->episode_no==$lastEpisode) print "class='sm-link-invalid'";
              print ">次エピソード</a>"; ?>
            </div>
          </div>
          <!-- エピソード本文 -->
          <div class="sm-book-episode-content">
            <?php print $detail->episode_text; ?>
          </div>
          <!-- ページネーション設定(下部)-->
          <div class="uk-flex uk-flex-around sm-book-episode-pagination uk-child-width-1-3">
            <div>
              <?php print "<a href='/bookEpisode.php?episodeNo=${prevEpisode}&bookId={$detail->book_id}'";
              if($prevEpisode==0) print "class='sm-link-invalid'";
              print ">前エピソード</a>"; ?>
            </div>
            <div>
              <?php print "<a href='/bookDetail.php?bookId={$detail->book_id}'>エピソード一覧</a>"; ?>
            </div>
            <div>
            <?php print "<a href='/bookEpisode.php?episodeNo=${nextEpisode}&bookId={$detail->book_id}'";
              if($detail->episode_no==$lastEpisode) print "class='sm-link-invalid'";
              print ">次エピソード</a>"; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
