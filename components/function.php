<?php

/** href属性と結びつけるモーダルウィンドウのidを生成する */
function getModalId($i){
  print "book-".$i;
}

/** 動的にhref属性の値を生成する */
function getHref($id){
  print '"#book-' . $id . '"';
}

?>
