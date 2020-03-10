<?php 
  /** 
  * herf属性の値を返却する
  */
  function getHref($id){
    print '"#book-' . $id . '"';
  }
  
?>

<div class="uk-width-expand uk-flex uk-flex-column">
  <!-- 書籍エリア1 -->
  <div class="uk-card uk-card-default uk-card-body uk-margin-bottom uk-padding-remove-horizontal sm-book-area">
    <div class="uk-flex uk-flex-center">
      <div class="uk-grid-small" uk-grid>
        <?php 
          for($i=0;$i<5; $i++){
            include("components/bookTitle.php");   
          }
        ?>
      </div>
    </div>
  </div>
  <!-- 書籍エリア2 -->
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

<!-- モーダル読込 -->
<?php include("components/modalWindow.php"); ?>