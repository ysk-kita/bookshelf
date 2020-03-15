<div class="uk-container uk-container-expand sm-header" uk-sticky>
  <nav class="uk-navbar">
    <!-- 左寄せnavbarブロック -->
    <div class="uk-navbar-left">
      <ul class="uk-nav uk-nav-default">
        <li class="uk-active">
          <!-- h3で入るマージンを削除 -->
          <a class="uk-h3 uk-margin-remove" href="/">
          <img data-src="images/logo.png" uk-img>
          </a>
        </li>
      </ul>
    </div>
    <!-- 右寄せnavbarブロック -->
    <div class="uk-navbar-right sm-nav-right">
      <ul class="uk-navbar-nav uk-visible@m uk-height-1-1">
        <li class="uk-active"><a href="/signUp.php"><span class="uk-button uk-button-text">会員登録</span></a></li>
        <li class="uk-active"><a href="/signIn.php"><span class="uk-button uk-button-text">ログイン</span></a></li>
      </ul>
      <!-- mサイズ以下になったら、ページリンクを再度バーとして表示するためのトグル -->
      <div class="uk-navbar-left uk-hidden@m uk-height-1-1 sm-toggle">
        <a class="uk-navbar-toggle uk-height-1-1" href="#sideMenu" uk-toggle="target: #sideMenu">
          <span uk-navbar-toggle-icon></span><span class="uk-margin-small-left">Menu</span>
        </a>
      </div>
    </div>
  </nav>
</div>
<!-- 左側にオーバーレイする形でメニューバーを出力する -->
<div id="sideMenu" uk-offcanvas="overlay: true" class="tm-sidebar-left uk-hidden@m ">
  <div class="uk-offcanvas-bar">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <h3 class="uk-heading-bullet uk-margin-remove-bottom">Menu List</h3>
    <div class="sm-sidebar-menu">
      <p class="uk-margin-remove">会員機能</p>
      <ul class="uk-nav uk-nav-default sm-menu-list">
        <li class="uk-active"><a href="#">会員登録</a></li>
        <li class="uk-active"><a href="#">ログイン</a></li>
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
