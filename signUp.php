<?php
session_start();
$id = '';
$userName = '';
$errMsg = '';
$terms = '0';

// ログイン失敗時に投げられる値のリセット
if(isset($_SESSION['errorMsg'])) {
  $errMsg = $_SESSION['errorMsg'];
  unset($_SESSION['errorMsg']);
}
if(isset($_SESSION['inputId']) ){
  $id = $_SESSION['inputId'];
  unset($_SESSION['inputId']);
}
if(isset($_SESSION['userName']) ){
  $userName = $_SESSION['userName'];
  unset($_SESSION['userName']);
}

if(isset($_SESSION['terms'])){
  $terms = $_SESSION['terms'];
  unset($_SESSION['terms']);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Kita-Books</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.7/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/tooltip.css"/>
    <script src="js/terms.js"></script>
    <script src="js/validation.js"></script>
  </head>

  <body class="uk-background-cover sm-sign-menu-body" data-src="images/background.jpg" uk-img>
    <!-- php関数定義ファイル読み込み -->
    <?php include("components/function.php"); ?>
    <!-- ナビゲーションバー -->
    <?php include("components/header.php"); ?>
    <?php include("components/header_sidebar.php"); ?>

    <!-- 本体 -->
    <div class="uk-container uk-container-expand">
      <div class="uk-flex uk-flex-center uk-margin-large-top">
        <span class="sm-sign-menu-area uk-background-default">
          <form class="uk-form-horizontal" id="sign-up" action="/signUpProcess.php" method="POST" autocomplete="off">
            <h4 class="uk-margin-small-top uk-margin-remove-bottom uk-margin-small-left">新規ユーザ作成</h4>
            <div class="uk-margin-left uk-text-danger invalid-list">
              <?php print $errMsg ?>
            </div>
            <div class="uk-margin-left uk-margin-right uk-margin-small-top uk-margin-small-bottom">
              <label class="uk-form-label">ユーザー名</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" placeholder="display name" name="userName" value="<?php print $userName ?>">
              </div>
            </div>

            <div class="uk-margin-left uk-margin-small-top uk-margin-right uk-margin-small-bottom">
              <label class="uk-form-label user-id-label">ユーザーID
                <span class="sm-require-label">必須</span>
              </label>
              <div class="uk-form-controls">
                <input class="uk-input user-id-box input-hint-user-id" id="form-stacked-text" type="text" placeholder="sign in id" name="userId"  value="<?php print $id ?>">
                <div id="hint-user-id" class="uk-hidden input-hint">半角文字で4文字以上</div>
              </div>
            </div>

            <div class="uk-margin-left uk-margin-bottom uk-margin-right">
              <label class="uk-form-label password-label">パスワード
                <span class="sm-require-label">必須</span>
              </label>
              <div class="uk-form-controls">
                <input class="uk-input password-box input-hint-password" placeholder="password..." type="password" name="password">
                <div id="hint-password" class="uk-hidden input-hint">
                  半角英数字記号の組み合わせで8文字以上16文字以内<br>
                  使用可能記号：!+*@`{},-:;
                </div>
              </div>
            </div>

            <div class="uk-flex uk-flex-between uk-margin-bottom uk-margin-left uk-margin-right">
              <div class="uk-flex uk-flex-column">
                <span><a href="#terms" uk-toggle>利用規約</a>に同意しますか？</span>
                <label>
                  <input class="uk-checkbox" id="terms-checkbox" disabled='disabled' type="checkbox" <?php if($terms == '1') print 'checked="checked"'; ?>>同意します</label>
              </div>
              <button class="uk-button uk-button-default">会員登録</button>
            </div>
            <input type="hidden" id="terms-check" name="terms" value="<?php print $terms?>">
          </form>
        </span>
      </div>
    </div>

    <div id="terms" class="uk-flex-top" uk-modal>
      <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-flex uk-flex-column">
          <h4 class="uk-flex uk-flex-center">Kita-books利用規約</h4>
          <div class="sm-terms-modal uk-margin-bottom uk-flex uk-flex-column uk-panel uk-panel-scrollable">
            <!-- これはphpでいい感じにする -->
            <span class="uk-margin-small-left uk-margin-small-right uk-margin-small-top">
              1.アカウントを作ると一部機能が開放されます
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              2.Web公開に合わせてこの機能は停止します。(個人情報保護法対策)
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              3.ログイン後のページを確認するには下記のユーザーを利用してください
            </span>
            <span class="uk-margin-left uk-margin-small-right">
              user-id: test001 / password: pass
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              4.同意するボタンを押下するとチェックされます
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              5.同意しないボタンを押下するとチェックが外れます
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              6.会員登録ボタンを推すと上述のテストユーザでログインされます。
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              x.スクロールバー用の行埋め
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              x.スクロールバー用の行埋め
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              x.スクロールバー用の行埋め
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              x.スクロールバー用の行埋め
            </span>
            <span class="uk-margin-small-left uk-margin-small-right uk-margin-small-bottom">
              EOF.最後まで呼んでいただきありがとうございます。
            </span>
          </div>
        </div>
        <div class="uk-flex uk-flex-around">
          <button class="uk-button uk-button-default uk-modal-close" type="button" id="disagree">同意しない</button>
          <button class="uk-button uk-button-primary uk-modal-close" type="button" id="agree">同意する</button>
        </div>
      </div>
    </div>
  </body>
</html>
