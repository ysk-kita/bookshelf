<?php
session_start();
$id = isset($_SESSION['inputId']) ? $_SESSION['inputId'] : '' ;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Kita-Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/uikit.min.css"/>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/terms.js"></script>

    <script src="js/validation.js"></script>
  </head>

  <body class="uk-background-cover sm-sign-menu-body" data-src="images/background.jpg" uk-img>
    <!-- php関数定義ファイル読み込み -->
    <?php include("components/function.php"); ?>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center uk-margin-large-top">
        <span class="sm-sign-menu-area uk-background-default">
          <form class="uk-form-horizontal" action="/signInProcess.php" method="POST">
            <h4 class="uk-margin-small-top uk-margin-remove-bottom uk-margin-small-left">ログイン</h4>
            <?php
            // エラーメッセージがある場合出力
            if(isset($_SESSION['errorMsg'])) print $_SESSION['errorMsg'];
            ?>
            <div class="uk-margin-left uk-margin-small-top uk-margin-right uk-margin-small-bottom">
              <label class="uk-form-label user-id-label">ユーザーID</label>
              <div class="uk-form-controls">
                <input class="uk-input user-id-box" id="form-stacked-text" type="text" placeholder="sign in id" name="signInId" value="<?php print $id ?>">
              </div>
            </div>

            <div class="uk-margin-left uk-margin-bottom uk-margin-right">
            <label class="uk-form-label password-label">パスワード</label>
              <div class="uk-form-controls">
                <input class="uk-input password-box" placeholder="password..." type="password" name="password">
              </div>
            </div>

            <div class="uk-flex uk-flex-right uk-margin-bottom uk-margin-left uk-margin-right">
              <button class="uk-button uk-button-default">ログイン</button>
            </div>

          </form>
        </span>
      </h4>
    </div>
  </body>
</html>
