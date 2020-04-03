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
      // チェックを要れた本のidリストを取得
      var idList = []
      $('input[name="modify-book"]:checked').each(function() {
        idList.push($(this).val());
      });

      // 本が未選択なら処理終了
      if(idList.length == 0){
        return false;
      }

      // 実行モードの取得
      mode = $('input[name="modify-mode"]:checked').val();

      // 移動先の本棚番号を取得
      shelf_id = $('#move-target option:selected').val();

      var data = {
        bookIdList: idList,
        shelfId: shelf_id
      };

      if(mode=="delete"){
        // ブックマーク削除呼び出し
        $.ajax({
          type: "POST",
          url: "/deleteBookmarksProcess.php",
          data: data,
        }).done(function(){
          alert('書籍を本棚から削除しました。');
          window.location.reload(true);
        }).fail(function(jqXHR, textStatus, errorThrown){
          alert("エラーが発生しました。リロードして再度実行してください。");
        });
      } else if (mode=="move"){
        // ブックマーク移動呼び出し
        $.ajax({
          type: "POST",
          url: "/updateBookmarksProcess.php",
          data: data,
        }).done(function(){
          alert('書籍を別の本棚に移動させました。');
          window.location.reload(true);
        }).fail(function(jqXHR, textStatus, errorThrown){
          alert("エラーが発生しました。リロードして再度実行してください。");

        });
      }
    });

});
