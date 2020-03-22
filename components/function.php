<?php

/** href属性と結びつけるモーダルウィンドウのidを生成する */
function getModalId($i){
  print "book-".$i;
}

/** 動的にhref属性の値を生成する */
function getHref($id){
  print '"#book-' . $id . '"';
}

/** 指定した値と重複しない乱数を作成する */
function getNotDupRands($min, $max, $quantity){
  $res = [];
  $max = $max -1 ; // phpのrandは$maxの指定値も出て面倒なので調整
  for($i = 0; $i < $quantity; $i++){
    // 生成済みの値を生成した場合は生成をやり直す
    do {
      $rand = rand($min, $max);
    } while (in_array($rand, $res));
    array_push($res, $rand);
  }

  return $res;
}


?>
