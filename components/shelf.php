<div>
  <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
    <a class="uk-button uk-button-default uk-height-small sm-book " href=<?php getHref($bookIndex); ?> uk-toggle>
      本<?php print $bookIndex; ?>
    </a>
  </div>
  <div class="uk-card-footer uk-padding-remove sm-book">
    <a href=<?php getHref($bookIndex); ?> class="uk-button uk-padding-remove uk-width-1-1 sm-book-title" uk-toggle>
      <?php print $books[$bookIndex]['book_title']; ?>
    </a>
  </div>
</div>
