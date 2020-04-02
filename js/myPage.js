$(function(){
  $('.pagination-tab').on('click', function(){

    // 現在開いているページと同じnavbarを選択したときは何もさせない
    if($(this).hasClass('sm-active-nav')){
      return false;
    }

    // navbarのアクティブ切り替え(現在のページ)
    var deselect = $('.sm-active-nav');
    deselect.removeClass('sm-active-nav');
    deselect.addClass('sm-inactive-nav');

    // navbarのアクティブ切り替え(次に開くページ)
    var select = $(this);
    select.removeClass('sm-inactive-nav');
    select.addClass('sm-active-nav');

    // 表示ページの切り替え
    $('#' + select.attr('page')).removeClass('uk-hidden');
    $('#' + deselect.attr('page')).addClass('uk-hidden');
  });

  // ページネーション(nextリンク)
  $('.pagination-link-next').on('click', function(){
    // 開くページ番号のidを生成
    var deselect = $('.sm-active-nav');
    var nowPage = deselect.attr('page');
    var nextPageNo = Number(nowPage.split('-')[1]) + 1;
    var nextPage = "[page='" + 'bookshelf-' + String(nextPageNo) + "']";

    // navbarのアクティブ切り替え(現在のページ)
    deselect.removeClass('sm-active-nav');
    deselect.addClass('sm-inactive-nav');

    // navbarのアクティブ切り替え(次に開くページ)
    var select = $(nextPage);
    select.removeClass('sm-inactive-nav');
    select.addClass('sm-active-nav');

    // 表示ページの切り替え
    $('#' + select.attr('page')).removeClass('uk-hidden');
    $('#' + deselect.attr('page')).addClass('uk-hidden');
  });

  // ページネーション(prevリンク)
  $('.pagination-link-prev').on('click', function(){
    // 開くページ番号のidを生成
    var deselect = $('.sm-active-nav');
    var nowPage = deselect.attr('page');
    var nextPageNo = Number(nowPage.split('-')[1]) - 1;
    var nextPage = "[page='" + 'bookshelf-' + String(nextPageNo) + "']";

    // navbarのアクティブ切り替え(現在のページ)
    deselect.removeClass('sm-active-nav');
    deselect.addClass('sm-inactive-nav');

    // navbarのアクティブ切り替え(次に開くページ)
    var select = $(nextPage);
    select.removeClass('sm-inactive-nav');
    select.addClass('sm-active-nav');

    // 表示ページの切り替え
    $('#' + select.attr('page')).removeClass('uk-hidden');
    $('#' + deselect.attr('page')).addClass('uk-hidden');
  });

    /** ブックマーク操作 */
    $('#modify-button').on('click', function(){
      // todo 本棚移動とか実装
      // 実行モードの取得
      mode = $('input[name="modify-mode"]:checked').val();

      // チェックを要れた本のidリストを取得
      var idList = []
      $('input[name="modify-book"]:checked').each(function() {
        idList.push($(this).val());
      });
      var data = {
        bookIdList: idList,
      };

      // ajaxで実施
      $.ajax({
        type: "POST",
        url: "/deleteBookmarksProcess.php",
        data: data,
      }).done(function(res){
        alert('書籍を本棚から削除しました。');
        alert(res);
        window.location.reload(true);
      }).fail(function(jqXHR, textStatus, errorThrown){
        if(jqXHR.status == 403){
          alert("ログイン後に実行してください。");
        } else {
          alert("エラーが発生しました。リロードして再度実行してください。");
        }
      });
    });

});
