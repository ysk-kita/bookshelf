<?php

$shelfCount = intval(count($books)/5) + 1;
if(count($books) < 1){
  print '<div class="sm-bookshelf sm-bookshelf-empty">この本棚は空です</div>';
} else {
  for($shelf=0; $shelf < $shelfCount; $shelf++){
    print '<div class="sm-bookshelf"><div class="uk-flex uk-flex-center"><div class="uk-grid-small" uk-grid>';
    $bookCount = count($books) - $shelf * 5;
    $bookMax = ($bookCount < $SHELF_BOOKS_MAX) ? $bookCount : $SHELF_BOOKS_MAX;
    for($bookNo=0; $bookNo < $bookMax; $bookNo++){
      $bookIndex = $bookNo + $shelf * 5;
      // 書籍情報読込
      include("components/shelf.php");
      // モーダル読込
      include("components/bookModal.php");
    }
    print '</div></div></div>';
  }
}
?>
