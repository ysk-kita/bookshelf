<?php
session_start();
include("components/function.php");
include("components/constants.php");
include("components/database_access/accessor.php");
include("components/database_access/books.php");

$userName = $_SESSION['userName'];
$userId = $_SESSION['userId'];

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

    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/myPage.js"></script>
  </head>

  <body class="uk-background-cover" data-src="images/background.jpg" uk-img>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>
    <?php include("components/header_sidebar_myPage.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center uk-margin-top uk-margin-large-bottom">
        <div class="sm-my-page-user-area uk-visible@m">
          <div class="uk-flex uk-flex-column uk-flex-around">
            <h4 class="uk-margin-remove-bottom uk-margin-small-top">こんにちは <?php print $userName ?> さん</h4>
            <div class="uk-flex uk-flex-center uk-margin-top">
              <a class="sm-button-link uk-button uk-button-secondary sm-link-invalid" href="">作品を投稿する</a>
            </div>
            <div class="uk-flex uk-flex-center uk-margin-top uk-margin-bottom">
              <div class="uk-flex uk-flex-column">
                <button class="sm-button-link uk-button uk-button-default" id="modify-button">本棚を操作する</button>
                <div class="uk-flex uk-flex-inline uk-flex-around uk-margin-small-top">
                  <span class="sm-radio">
                  <input type="radio" name="modify-mode" class="uk-margin-remove" value="delete" checked="checked">削除
                  </span>
                  <span class="sm-radio">
                    <input type="radio" name="modify-mode" class="uk-margin-remove" value="move">移動
                  </span>
                  <span class="sm-radio">
                    <select id="move-target">
                      <option value="1">本棚1</option>
                      <option value="2">本棚2</option>
                      <option value="3">本棚3</option>
                    </select>
                  </span>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="uk-flex uk-flex-column uk-margin-large-bottom@m">
          <nav class="" uk-navbar>
            <div class="uk-navbar-left sm-my-page-navbar">
              <ul class="uk-navbar-nav">
                <li>
                  <a class="sm-active-nav pagination-tab" page="bookshelf-1">本棚1</a>
                </li>
                <li>
                  <a class="sm-inactive-nav pagination-tab" page="bookshelf-2">本棚2</a>
                </li>
                <li>
                  <a class="sm-inactive-nav pagination-tab" page="bookshelf-3">本棚3</a>
                </li>
              </ul>
            </div>
          </nav>
          <span id="bookshelf-1" class="">
            <div class="uk-flex uk-flex-center uk-flex-column sm-bookshelf-area">
              <!-- 書籍エリア -->
              <?php
              $books = get_bookmarks_list($mysql, $userId, $SHELF_FIRST);
              $shelfIndex = $SHELF_FIRST;
              include("components/bookshelfArea.php");
              ?>
            </div>
            <!-- リンクでページ遷移 -->
            <div class="sm-bookshelf-pagination uk-flex uk-flex-between">
              <!-- 1ページ目のprevリンクは無効リンクにする -->
              <span><a class="pagination-link-prev sm-link-invalid" href="#">&lt;&lt;prev</a></span>
              <span><a class="pagination-link-next" href="#">next&gt;&gt;</a></span>
            </div>
          </span>
          <span id="bookshelf-2" class="uk-hidden">
            <div class="uk-flex uk-flex-center uk-flex-column sm-bookshelf-area">
              <!-- 書籍エリア -->
              <?php
              $books = get_bookmarks_list($mysql, $userId, $SHELF_SECOND);
              $shelfIndex = $SHELF_SECOND;
              include("components/bookshelfArea.php");
              ?>
            </div>
            <!-- リンクでページ遷移 -->
            <div class="sm-bookshelf-pagination uk-flex uk-flex-between">
              <span><a class="pagination-link-prev" href="#">&lt;&lt;prev</a></span>
              <span><a class="pagination-link-next" href="#">next&gt;&gt;</a></span>
            </div>
          </span>
          <span id="bookshelf-3" class="uk-hidden">
            <div class="uk-flex uk-flex-center uk-flex-column sm-bookshelf-area">
              <!-- 書籍エリア -->
              <?php
              $books = get_bookmarks_list($mysql, $userId, $SHELF_THIRD);
              $shelfIndex = $SHELF_THIRD;
              include("components/bookshelfArea.php");
              ?>
            </div>
            <!-- リンクでページ遷移 -->
            <div class="sm-bookshelf-pagination uk-flex uk-flex-between">
              <!-- 1ページ目のprevリンクは無効リンクにする -->
              <span><a class="pagination-link-prev" href="#">&lt;&lt;prev</a></span>
              <span><a class="pagination-link-next sm-link-invalid" href="#">next&gt;&gt;</a></span>
            </div>
          </span>
        </div>
      </div>
    </div>
  </body>
</html>
