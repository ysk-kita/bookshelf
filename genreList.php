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
$genre = $_GET['genre'];
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
    <?php include("components/header_sidebar.php"); ?>
    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center uk-margin-medium-top uk-margin-medium-bottom">
        <div class="uk-flex uk-flex-column ">
          <div class="uk-background-default">
            <h4 class=" sm-genre-label">
              <?php
                if($genre == 'all'){
                  print '全てのジャンルの本一覧';
                } else {
                  print 'ジャンル：' . get_genre_name($mysql, $genre) . ' の本一覧';
                }
              ?>
            </h4>
          </div>
          <div class="uk-margin-remove uk-padding-remove-horizontal uk-padding-remove-bottom sm-book-area uk-margin-top uk-flex-column">
          <?php

            print "<div class='uk-flex uk-flex-column book-genre' id='genre-${genre}'>";
            if($genre == 'all'){
              $books = get_all_genre_books($mysql);
            } else {
              $books = get_genre_books($mysql, $GENRE_DICT[$genre]);
            }

            $pages = $_GET['pages']; // getで調整

            $pageCount = (int)(count($books) / 5) + 1;
            $bookStart = $GENRE_BOOKS_MAX * ($pages-1);
            $bookEnd = $GENRE_BOOKS_MAX + ($GENRE_BOOKS_MAX * ($pages-1));
            $bookEnd = ($bookEnd > count($books)) ? count($books) : $bookEnd;

            for($bookIndex = $bookStart; $bookIndex < $bookEnd; $bookIndex++){
              include("components/genreShelf.php");
            }
            print "</div>";
          ?>
          </div>
          <div class="sm-genre-pagination uk-flex uk-margin-remove uk-flex-between">
            <!-- 1ページ目のprevリンクは無効リンクにする -->
            <?php
            if ($pages == 1){
              print "<span><a class='sm-link-invalid' href='#'>&lt;&lt;prev</a></span>";
            } else {
              $prev = $pages - 1;
              print "<span><a href='/genreList.php?genre=${genre}&pages=${prev}'>&lt;&lt;prev</a></span>";
            }
            ?>
            <span class="sm-pages">
              <?php
              for($i = 1; $i< ($pageCount + 1); $i++){
                if ($i==$pages){
                  print "<span class='sm-now-page'><a class='sm-link-invalid' href='#'>${i}</a></span>";
                } else {
                  print "<span><a href='/genreList.php?genre=${genre}&pages=${i}'>${i}</a></span>";
                }
              };
              ?>
            </span>
            <?php
            if ($pages == $pageCount){
              print "<span><a class='sm-link-invalid' href='#'>&gt;&gt;next</a></span>";
            } else {
              $next = $pages + 1;
              print "<span><a href='/genreList.php?genre=${genre}&pages=${next}'>&gt;&gt;next</a></span>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
