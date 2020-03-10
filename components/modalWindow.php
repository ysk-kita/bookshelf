<div id=<?php getModalId($i) ?> class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <div class="uk-flex uk-flex-center uk-grid-small">
      <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book uk-height-small">
        本<?php print $i;?>
      </div>  
      <div class="uk-flex uk-flex-column uk-flex-between">
        <div class="">タイトル</div>
        <div class="">
          <button class="uk-button uk-button-default">詳細</button>
        </div>
      </div>
    </div>
  </div>
</div>