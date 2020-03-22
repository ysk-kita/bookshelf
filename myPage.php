<?php
session_start();
include("components/function.php");
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

    <link rel="stylesheet" href="css/uikit.min.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="css/swiper.css">
    <script src="js/swiper.js"></script>

    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/myPage.js"></script>
  </head>

  <body class="uk-background-cover" data-src="images/background.jpg" uk-img>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center uk-margin-top uk-margin-large-bottom">
        <div class="sm-my-page-user-area uk-visible@m">
          <h4 class="uk-margin-remove-bottom">
            <span class="">こんにちは <?php print $userName ?> さん</span>
          </h4>
        </div>
        <div class="uk-flex uk-flex-column">
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
              <div class="sm-bookshelf">
                <div class="uk-flex uk-flex-center">
                  <div class="uk-grid-small" uk-grid>
                    <?php
                      for($i=0;$i<5; $i++){
                        // 書籍情報読込
                        include("components/pickUp.php");
                        // モーダル読込
                        include("components/modalWindow.php");
                      }
                    ?>
                  </div>
                </div>
              </div>
              <!-- 書籍エリア -->
              <div class="sm-bookshelf">
                <div class="uk-flex uk-flex-center">
                  <div class="uk-grid-small" uk-grid>
                    <?php
                      for($i=5;$i<10; $i++){
                        // 書籍情報読込
                        include("components/pickUp.php");
                        // モーダル読込
                        include("components/modalWindow.php");
                      }
                    ?>
                  </div>
                </div>
              </div>
              <!-- 書籍エリア -->
              <div class="sm-bookshelf">
                <div class="uk-flex uk-flex-center">
                  <div class="uk-grid-small" uk-grid>
                    <?php
                      for($i=10;$i<15; $i++){
                        // 書籍情報読込
                        include("components/pickUp.php");
                        // モーダル読込
                        include("components/modalWindow.php");
                      }
                    ?>
                  </div>
                </div>
              </div>
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
              <div class="sm-bookshelf">
                <div class="uk-flex uk-flex-center">
                  <div class="uk-grid-small" uk-grid>
                    <?php
                      for($i=15;$i<20; $i++){
                        // 書籍情報読込
                        include("components/pickUp.php");
                        // モーダル読込
                        include("components/modalWindow.php");
                      }
                    ?>
                  </div>
                </div>
              </div>
              <!-- 書籍エリア -->
              <div class="sm-bookshelf">
                <div class="uk-flex uk-flex-center">
                  <div class="uk-grid-small" uk-grid>
                    <?php
                      for($i=20;$i<25; $i++){
                        // 書籍情報読込
                        include("components/pickUp.php");
                        // モーダル読込
                        include("components/modalWindow.php");
                      }
                    ?>
                  </div>
                </div>
              </div>
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
              <div class="sm-bookshelf sm-bookshelf-empty">
                  この本棚は空です
              </div>
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
