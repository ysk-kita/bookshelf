<div class="uk-width-expand uk-flex uk-flex-column">
  <!-- 書籍エリア1 -->
  <h4 class="uk-margin-remove">
    <span class="sm-area-label uk-background-default">現在注目中の書籍</span>
  </h4>
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom uk-padding-remove-horizontal sm-book-area">
    <div class="uk-flex uk-flex-center">
      <div class="uk-grid-small" uk-grid>
        <?php
          for($i=0;$i<5; $i++){
            // 書籍情報読込
            include("components/pickUp.php");
            // モーダル読込
            include("components/modalWindow.php");
          }
        ?>
      </div>
    </div>
  </div>
  <!-- 書籍エリア2 -->
  <h4 class="uk-margin-remove">
    <span class="sm-area-label uk-background-default">新着の書籍エリア</span>
  </h4>
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom sm-book-area">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <!-- ここループポイント -->
        <?php
          // print '<div class="swiper-slide"><div class="uk-flex uk-flex-center"><div class="uk-grid-small" uk-grid>';
          $bookList = array(1, 2, 3, 4, 5);
          $j = 0;
          $end = 5;
          foreach ($bookList as &$i) {
            if( $j % 4 == 0 ){
              print '<div class="swiper-slide"><div class="uk-flex uk-flex-center"><div class="uk-grid-small" uk-grid>';
            }
            // 書籍情報読込
            include("components/newBook.php");
            // モーダル読込
            include("components/modalWindow.php");

            // スワイプ処理要
            if( $j % 4 == 3 || ($j + 1) == $end ){
              print '</div></div></div>';
            }
            $j++;
          }
          unset($value); // 最後の要素への参照を解除します
        ?>
        <div class="swiper-slide"></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>

<!-- スワイプ処理 -->
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
