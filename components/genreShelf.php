<!-- ジャンル詳細 -->
<div class="uk-flex uk-flex-left uk-margin-large-left sm-genre-search-books">
  <div class="uk-flex">
    <div class="uk-padding-remove sm-book uk-height-small uk-margin-right">
      <img class="sm-book-img" src=<?php print $books[$bookIndex]['cover_img']; ?> />
    </div>
    <div class="uk-flex uk-flex-column uk-flex-between">
      <div class="uk-margin-bottom"><?php print $books[$bookIndex]['book_title']; ?></div>
      <div class="uk-margin-bottom">
        <p class="sm-synopsis"><?php print $books[$bookIndex]['synopsis']; ?></p>
      </div>
      <div class="uk-margin-auto-left">
        <a class="sm-button-link uk-button uk-button-default" href=<?php print '/bookDetail.php?bookId=' . $books[$bookIndex]['book_id']; ?>>作品ページへ</a>
      </div>
    </div>
  </div>
</div>
<div class="sm-divider"></div>
