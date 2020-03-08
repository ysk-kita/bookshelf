<!DOCTYPE html>
<html>
  <head>
    <title>Kita-Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </head>

  <body>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-background-cover" data-src="images/background.jpg" uk-img>
        <p class="uk-margin-remove-bottom uk-padding-small uk-text-secondary">
          Kita-Booksは無料で書籍を読めるサイトになっております。ごゆっくりご閲覧ください。
        </p>
        <div class="uk-flex" uk-grid>
          <!-- ジャンルエリアは960px以下では隠す -->
          <div class="uk-width-1-5 uk-visible@m">
            <div class="uk-card uk-card-default uk-card-body">ジャンル</div>
          </div>
          <!-- 書籍エリアは動的に作る -->
          <div class="uk-width-expand uk-flex uk-flex-column">
            <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">書籍エリア1</div>
            <div class="uk-card uk-card-default uk-card-body uk-margin-bottom">書籍エリア2</div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>
