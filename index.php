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
    <div class="uk-container uk-container-expand sm-header" uk-sticky>
      <nav class="uk-navbar">
        <!-- 左寄せnavbarブロック -->
        <div class="uk-navbar-left">
          <ul class="uk-nav uk-nav-default">
            <li class="uk-active">
              <!-- h3で入るマージンを削除 -->
              <a class="uk-h3 uk-margin-remove">
              <img data-src="images/logo.png" uk-img>
              </a>
            </li>
          </ul>
        </div>
        <!-- 右寄せnavbarブロック -->
        <div class="uk-navbar-right">
          <!-- レスポンシブでMサイズ以下は表示しないページリンク -->
          <ul class="uk-navbar-nav uk-visible@m">
          </ul>
          <!-- mサイズ以下になったら、ページリンクを再度バーとして表示するためのトグル -->
          <a uk-navbar-toggle-icon="" href="#sideMenu" uk-toggle="target: #sideMenu" class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon"></a>
        </div>
      </nav>
    </div>

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
