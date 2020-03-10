<?php
  function hello(){
    print 'hello';
  }
?>


<div id="book-1" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
    <button class="uk-modal-close-default" type="button" uk-close></button>
    <p><?php hello() ?></p>
  </div>
</div>