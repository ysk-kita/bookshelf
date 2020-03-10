<div class="uk-width-expand uk-flex uk-flex-column">
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom uk-padding-remove-horizontal sm-book-area">
    <!-- 書籍一覧エリア -->
    <div class="uk-flex uk-flex-center">
      <!-- 本出力エリア -->
      <div class="uk-grid-small" uk-grid>
        <div class="uk-flex uk-flex-column uk-flex-center">
          <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
            <a class="uk-button uk-button-default uk-height-small sm-book" href="#book-1" uk-toggle>本1</a>
          </div>
          <div class="uk-card-footer uk-padding-remove sm-book">
            <a href="#book-1" class="uk-button uk-padding-remove uk-width-1-1" uk-toggle>Read more</a>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
            <a class="uk-button uk-button-default uk-height-small sm-book" href="#book-1" uk-toggle>本2</a>
          </div>  
          <div class="uk-card-footer uk-padding-remove sm-book">
            <a href="#book-1" class="uk-button uk-padding-remove uk-width-1-1" uk-toggle>Read more</a>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
            <a class="uk-button uk-button-default uk-height-small sm-book" href="#book-1" uk-toggle>本3</a>
          </div>
          <div class="uk-card-footer uk-padding-remove sm-book">
            <a href="#book-1" class="uk-button uk-padding-remove uk-width-1-1" uk-toggle>Read more</a>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
            <a class="uk-button uk-button-default uk-height-small sm-book" href="#book-1" uk-toggle>本4</a>
          </div>
          <div class="uk-card-footer uk-padding-remove sm-book">
            <a href="#book-1" class="uk-button uk-padding-remove uk-width-1-1" uk-toggle>Read more</a>
          </div>
        </div>
        <div>
          <div class="uk-card uk-card-default uk-card-body uk-padding-remove sm-book">
            <a class="uk-button uk-button-default uk-height-small sm-book" href="#book-1" uk-toggle>本5</a>
          </div>
          <div class="uk-card-footer uk-padding-remove sm-book">
            <a href="#book-1" class="uk-button uk-padding-remove uk-width-1-1" uk-toggle>Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom sm-book-area">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- ここループポイント -->
        <?php include("components/bookList.php"); ?>
        <div class="swiper-slide"></div>
        <?php include("components/bookList.php"); ?>
        <div class="swiper-slide"></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>

<!-- スワイプ処理のために読み込み -->
<script>
  var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  });
</script>

<?php include("components/modalWindow.php"); ?>