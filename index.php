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

    <link rel="stylesheet" href="css/pulldown.css"/>
    <script type="text/javascript" src="js/pulldown.js"></script>

    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body class="uk-background-cover" data-src="images/background.jpg" uk-img>
    <!-- php関数定義ファイル読み込み -->
    <?php include("components/function.php"); ?>

    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div>
        <p class="uk-margin-remove-bottom uk-padding-small uk-text-secondary">
          Kita-Booksは無料で書籍を読めるサイトになっております。ごゆっくりご閲覧ください。
        </p>
        <div class="uk-flex uk-flex-center">
          <!-- ジャンルエリア -->
          <?php include("components/genre.php"); ?>
          <!-- 書籍エリア -->
          <div class="uk-margin-left">
            <?php include("components/bookArea.php"); ?>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
