<div id=<?php getModalId($bookIndex); ?> class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="uk-flex uk-flex-center uk-grid-small">
      <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book uk-height-small">
        本<?php print $bookIndex;?>
      </div>
      <div class="uk-flex uk-flex-column uk-flex-between">
        <div><?php print $books[$bookIndex]['book_title']; ?></div>
        <div><?php print $books[$bookIndex]['synopsis']; ?></div>
        <div><button class="uk-button uk-button-default">詳細</button></div>
      </div>
    </div>
  </div>
</div>
