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
          <form class="uk-form-horizontal" action="/" method="POST">
            <h4 class="uk-margin-small-top uk-margin-remove-bottom uk-margin-small-left">新規ユーザ作成</h4>

            <div class="uk-margin-left uk-margin-right uk-margin-small-top uk-margin-small-bottom">
              <label class="uk-form-label">ユーザー名</label>
              <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" placeholder="display name">
              </div>
            </div>

            <div class="uk-margin-left uk-margin-small-top uk-margin-right uk-margin-small-bottom">
              <label class="uk-form-label">ユーザーID
                <span class="sm-require-label">必須</span>
              </label>
              <div class="uk-form-controls">
                <input class="uk-input" id="form-stacked-text" type="text" placeholder="sign in id">
              </div>
            </div>

            <div class="uk-margin-left uk-margin-bottom uk-margin-right">
            <label class="uk-form-label">パスワード
              <span class="sm-require-label">必須</span>
            </label>
              <div class="uk-form-controls">
                <input class="uk-input" placeholder="password..." type="password">
              </div>
            </div>

            <div class="uk-flex uk-flex-between uk-margin-bottom uk-margin-left uk-margin-right">
              <div class="uk-flex uk-flex-column">
                <span><a href="#terms" uk-toggle>利用規約</a>に同意しますか？</span>
                <label>
                  <input class="uk-checkbox" id="terms-checkbox" disabled='disabled' type="checkbox"> 同意します
                </label>
              </div>
              <button class="uk-button uk-button-default">会員登録</button>
            </div>
            <input type="hidden" id="terms-check" name="terms" value="0">
          </form>
        </span>
      </h4>
    </div>

    <div id="terms" class="uk-flex-top" uk-modal>
      <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-flex uk-flex-column">
          <h4 class="uk-flex uk-flex-center">Kita-books利用規約</h4>
          <div class="sm-terms-modal uk-margin-bottom uk-flex uk-flex-column">
            <!-- これはphpでいい感じにする -->
            <span class="uk-margin-small-left uk-margin-small-right uk-margin-small-top">
              1.アカウントを作ることで特にあなたにデメリットはありません
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              2.Web公開に合わせてこの機能は停止します。(個人情報保護法対策)
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              3.ログイン専用後のページを確認するには下記のユーザーを利用してください
            </span>
            <span class="uk-margin-left uk-margin-small-right">
              user-id: test001 / password: pass
            </span>
            <span class="uk-margin-small-left uk-margin-small-right">
              4.同意するボタンを押下するとチェックされます
            </span>
            <span class="uk-margin-small-left uk-margin-small-right uk-margin-small-bottom">
              5.同意しないボタンを押下するとチェックが外れます
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
