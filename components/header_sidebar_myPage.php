<?php
$isSignIn = isset($_SESSION['userName']);
?>
<!-- 左側にオーバーレイする形でメニューバーを出力する -->
<div id="sideMenu" uk-offcanvas="overlay: true" class="tm-sidebar-left uk-hidden@m ">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <h3 class="uk-heading-bullet uk-margin-remove-bottom">Menu List</h3>
    <div class="sm-sidebar-menu">
      <p class="uk-margin-remove">MyPage機能</p>
      <ul class="uk-nav uk-nav-default sm-menu-list">
        <li class="uk-active genre-selector" genre-id="genre-all"><a class="sm-link-invalid" href="">作品を投稿する</a></li>
        <li class="uk-active genre-selector" genre-id="genre-all"><a class="sm-link-invalid" href="">本棚を整理する</a></li>
      </ul>
    </div>
  </div>
</div>
