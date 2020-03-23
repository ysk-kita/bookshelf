<?php
session_start();

// php関数定義ファイル読み込み
require("components/function.php");
include("components/constants.php");
include("components/database_access/accessor.php");
include("components/database_access/books.php");
include("components/database_access/genre.php");

// ジャンルエリアの動的生成に使うため、先にジャンル一覧のみ取得しておく
$genreList = get_genre_list($mysql);

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
    <?php include("components/header_sidebar_index.php"); ?>
    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div>
        <p class="uk-margin-remove-bottom uk-padding-small uk-text-secondary">
          Kita-Booksは無料で書籍を読めるサイトになっております。ごゆっくりご閲覧ください。
        </p>
        <div class="uk-flex uk-flex-center">
          <!-- ジャンル一覧エリア -->
          <?php include("components/genre.php"); ?>
          <!-- 検索結果エリア -->
          <?php include("components/genreSearch.php"); ?>
        </div>
        <div class="uk-flex uk-flex-center uk-margin-medium-top">
          <!-- 書籍エリア -->
          <div class="">
            <?php include("components/bookArea.php"); ?>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
