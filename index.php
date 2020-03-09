<!DOCTYPE html>
<html>
  <head>
    <title>Kita-Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
  </head>

  <body class="uk-background-cover" data-src="images/background.jpg" uk-img>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div>
        <p class="uk-margin-remove-bottom uk-padding-small uk-text-secondary">
          Kita-Booksは無料で書籍を読めるサイトになっております。ごゆっくりご閲覧ください。
        </p>
        <div class="uk-flex uk-flex-center">
          <!-- ジャンルエリアは960px以下では隠す -->
          <div class="uk-visible@m sm-genre-area uk-margin-left">
            <div class="uk-card uk-card-default uk-card-body">ジャンル</div>
          </div>
          <!-- 書籍エリア -->
          <div class="uk-margin-left">
            <?php include("components/bookArea.php"); ?>  
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
