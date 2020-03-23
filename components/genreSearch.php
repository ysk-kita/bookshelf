<div>
  <!-- 選択中のジャンル出力エリア(jsで変更) -->
  <h4 class="uk-margin-remove">
    <span class="sm-area-label uk-background-default" id="genre-label">ジャンル：総合</span>
  </h4>

  <!-- 指定したジャンルを出力 -->
  <div class="uk-margin-bottom uk-padding-remove-horizontal uk-padding-remove-bottom sm-book-area uk-flex uk-flex-column">
    <!-- 全てのジャンルの生成 -->
    <div class="uk-flex uk-flex-column book-genre-select" id="genre-all">
      <?php
      $books = get_all_genre_books($mysql);
      // 各ジャンルからランダムに3件表示 (総合は3件を下回らないので制御を入れない)
      $noList = getNotDupRands(0 , count($books), 3);
      foreach ($noList as $bookIndex){
        include("components/genreShelf.php");
      }
      ?>
    </div>
    <!-- ジャンル別エリアを生成 -->
    <?php
    foreach($genreList as $genre){
      print "<div class='uk-flex uk-flex-column book-genre uk-hidden' id='genre-${genre['genre_path']}'>";
      $books = get_genre_books($mysql, $genre['genre_id']);
      // 各ジャンルからランダムに3件表示 (総合は3件を下回らないので制御を入れない)
      for($bookIndex = 0; $bookIndex < count($books); $bookIndex++){
        include("components/genreShelf.php");
      }
      print "</div>";
    }
    ?>

    <!-- ループの最後を出力した後に詳細リンクを作る(ここもJSで改変) -->
    <div class="uk-margin-right uk-margin-auto-left">
      <a id="genre-link" class="uk-button uk-padding-remove uk-width-1-1" href="/genreList.php?genre=all">ジャンル詳細へ</a>
    </div>
  </div>
</div>
