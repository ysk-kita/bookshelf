<div>
  <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
    <a class="uk-height-small sm-book" href=<?php getHref($shelfIndex . '-' . $bookIndex); ?> uk-toggle>
      <img class="sm-book-img" src=<?php print $books[$bookIndex]['cover_img']; ?> />
    </a>
  </div>
  <div class="uk-card-footer uk-padding-remove sm-book">
    <a href=<?php getHref($shelfIndex . '-' . $bookIndex); ?> class="uk-button uk-padding-remove uk-width-1-1 sm-book-title" uk-toggle>
      <?php print $books[$bookIndex]['book_title']; ?>
    </a>
  </div>
  <div class="uk-flex uk-flex-center">
    <input type="checkbox" name="modify-book" value=<?php print $books[$bookIndex]['book_id']; ?>>
  </div>
</div>
