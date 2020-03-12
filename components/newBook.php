<!-- 本出力エリア -->
<div class="uk-flex uk-flex-column uk-flex-center">
  <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
    <a class="uk-button uk-button-default uk-height-small sm-book" href=<?php getHref($i) ?> uk-toggle>新着本<?php print $i;?></a>
  </div>
  <div class="uk-card-footer uk-padding-remove sm-book">
    <a href=<?php getHref($i) ?> class="uk-button uk-padding-remove uk-width-1-1" uk-toggle>Read more</a>
  </div>
</div>
