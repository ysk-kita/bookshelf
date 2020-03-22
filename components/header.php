<?php
$isSignIn = isset($_SESSION['userName']);
?>

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
      <!-- mサイズ以下になったら、ページリンクを再度バーとして表示するためのトグル -->
      <div class="uk-navbar-left uk-hidden@m uk-height-1-1 sm-toggle">
        <a class="uk-navbar-toggle uk-height-1-1" href="#sideMenu" uk-toggle="target: #sideMenu">
          <span uk-navbar-toggle-icon></span><span class="uk-margin-small-left">Menu</span>
        </a>
      </div>
    </div>
  </nav>
</div>
