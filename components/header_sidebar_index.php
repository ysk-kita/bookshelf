<?php
$isSignIn = isset($_SESSION['userName']);
?>
<!-- 左側にオーバーレイする形でメニューバーを出力する -->
<div id="sideMenu" uk-offcanvas="overlay: true" class="tm-sidebar-left uk-hidden@m ">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <h3 class="uk-heading-bullet uk-margin-remove-bottom">Menu List</h3>
    <div class="sm-sidebar-menu">
      <p class="uk-margin-remove">会員機能</p>
      <ul class="uk-nav uk-nav-default sm-menu-list">
        <?php
          if($isSignIn){
            print '<li class="uk-active"><a href="/myPage.php"><span class="uk-button uk-button-text">マイページ</span></a></li>';
            print '<li class="uk-active"><a href="/signOutProcess.php"><span class="uk-button uk-button-text">ログアウト</span></a></li>';
          } else {
            print '<li class="uk-active"><a href="/signUp.php"><span class="uk-button uk-button-text">会員登録</span></a></li>';
            print '<li class="uk-active"><a href="/signIn.php"><span class="uk-button uk-button-text">ログイン</span></a></li>';
          }
        ?>
      </ul>
    </div>
    <div class="sm-sidebar-menu">
      <p class="uk-margin-remove">書籍分類</p>
      <ul class="uk-nav uk-nav-default sm-menu-list">
        <li class="uk-active genre-selector" genre-id="genre-capture"><a>攻略本</a></li>
        <li class="uk-active genre-selector" genre-id="genre-reference"><a>参考書</a></li>
        <li class="uk-active genre-selector" genre-id="genre-another"><a>その他</a></li>
      </ul>
    </div>
  </div>
</div>
