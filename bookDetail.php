<?php
session_start();

// php関数定義ファイル読み込み
require("components/function.php");
include("components/constants.php");
include("components/database_access/accessor.php");
include("components/database_access/books.php");

$book = get_book_info($mysql, $_GET['bookId']);
$bookDetail = get_book_detail_list($mysql, $_GET['bookId']);

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

    <link rel="stylesheet" href="css/pulldown.css"/>
    <script type="text/javascript" src="js/pulldown.js"></script>

    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body class="uk-background-cover" data-src="images/background.jpg" uk-img>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center">
        <div class="sm-book-detail">
          <h3><?php print $book[0]['book_title'] ?></h3>
          <div class="uk-flex uk-flex-column uk-margin-bottom sm-book-detail-area">
            <div class="uk-flex uk-flex-inline">
              <img class="sm-book-detail-img" src=<?php print $book[0]['cover_img']; ?> />
              <div class="uk-flex uk-flex-column sm-book-detail-episode-one uk-flex-between">
                <div class="sm-book-detail-title">第1話 <span>(全<?php print $book[0]['total_episodes'] ?>話)</span></div>
                <button class="uk-button uk-button-default">第1話を読む</button>
                <div class="uk-flex uk-flex-inline">
                  <button class="uk-button uk-button-default">本棚に追加する</button>
                  <button class="uk-button uk-button-default">☆未</button>
                </div>
              </div>
            </div>
            <div class="sm-book-detail-synopsis">
              <?php print $book[0]['synopsis'] ?>
            </div>
          </div>
        </div>

        <div>

        </div>

      </div>
    </div>
  </body>

</html>
