<?php
session_start();

// php関数定義ファイル読み込み
require("components/function.php");
include("components/constants.php");
include("components/database_access/accessor.php");
include("components/database_access/books.php");
include("components/database_access/bookmarks.php");

$book = get_book_info($mysql, $_GET['bookId']);
$bookDetail = get_book_detail_list($mysql, $_GET['bookId']);

$isBookmarks = false;
// ブックマーク追加済み確認
if(isset($_SESSION['userId'])){
  try {
    $checkResult = get_bookmarks_count($mysql, $_SESSION['userId'],  $_GET['bookId']);
  } catch (PDOException $e) {
    $error = $e->getMessage();
  }
  $isBookmarks = ($checkResult=='1') ? true : false;
}






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

        <?php include("components/advertising.php"); ?>

        <div class="sm-book-detail">
          <h3><?php print $book[0]['book_title'] ?></h3>
          <div class="uk-flex uk-flex-column uk-margin-bottom sm-book-detail-area">
            <div class="uk-flex uk-flex-inline">
              <img class="sm-book-detail-img" src=<?php print $book[0]['cover_img']; ?> />
              <div class="uk-flex uk-flex-column sm-book-detail-episode-one uk-flex-between">
                <div class="uk-flex uk-flex-inline">
                  <div>全<?php print $book[0]['total_episodes']; ?>話</span></div>
                  <?php
                  if($isBookmarks){
                    print '<span class="sm-bookmarks-state">★</span>';
                  } else {
                    print '<span class="sm-bookmarks-state">☆</span>';
                  }
                  ?>
                </div>
                <a class="sm-button-link uk-button uk-button-default" href="/bookEpisode.php?episodeNo=1">第1話を読む</a>
                <?php
                  if($isBookmarks){
                    print '<button class="uk-button uk-button-default" id="delete-bookmarks" bookId=' . $book[0]['book_id'] . '>本棚から削除</button>';
                    print '<button class="uk-button uk-button-default uk-hidden" id="add-bookmarks" bookId=' . $book[0]['book_id'] . '>本棚に追加</button>';
                  } else {
                    print '<button class="uk-button uk-button-default uk-hidden" id="delete-bookmarks" bookId=' . $book[0]['book_id'] . '>本棚から削除</button>';
                    print '<button class="uk-button uk-button-default" id="add-bookmarks" bookId=' . $book[0]['book_id'] . '>本棚に追加</button>';
                  }
                ?>
              </div>
            </div>
            <div class="sm-book-detail-synopsis">
              <?php print $book[0]['synopsis'] ?>
            </div>
            <div class="sm-book-detail-episodes">
              <?php
              foreach($bookDetail as $detail){
                print "<div><a href='/bookEpisode.php?episodeNo=${detail['episode_no']}'>${detail['episode_title']}</a></div>";
              };
              ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  </body>

</html>
