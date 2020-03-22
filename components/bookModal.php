<div id=<?php getModalId($shelfIndex  . '-' .$bookIndex); ?> class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="uk-flex uk-grid-small">
      <div class="uk-height-small sm-book">
        <img class="sm-book-img" src=<?php print $books[$bookIndex]['cover_img']; ?> />
      </div>
      <div class="uk-flex uk-flex-column uk-flex-between uk-margin-auto-right">
        <div><?php print $books[$bookIndex]['book_title']; ?></div>
        <div><?php print $books[$bookIndex]['synopsis']; ?></div>
        <div><button class="uk-button uk-button-default">詳細</button></div>
      </div>
    </div>
  </div>
</div>
