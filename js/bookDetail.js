$(function(){
  /** ブックマーク追加 */
  $('#add-bookmarks').on('click', function(){
    var data = {
      bookId: $(this).attr('bookId'),
    };
    // ajaxで実施
    $.ajax({
      type: "POST",
      url: "/addBookmarksProcess.php",
      data: data,
    }).done(function(){
      alert('書籍を本棚に追加しました。');

      // ★マークの更新
      $('.sm-bookmarks-state').html('★');

      // ボタンの切り替え
      $('#add-bookmarks').addClass('uk-hidden');
      $('#delete-bookmarks').removeClass('uk-hidden');

    }).fail(function(jqXHR, textStatus, errorThrown){
      if(jqXHR.status == 403){
        alert("ログイン後に実行してください。");
      } else {
        alert("エラーが発生しました。リロードして再度実行してください。");
      }
    });
  });

  /** ブックマーク削除 */
  $('#delete-bookmarks').on('click', function(){
    var data = {
      bookId: $(this).attr('bookId'),
    };
    // ajaxで実施
    $.ajax({
      type: "POST",
      url: "/deleteBookmarksProcess.php",
      data: data,
    }).done(function(){
      alert('書籍を本棚から削除しました。');

      // ★マークの更新
      $('.sm-bookmarks-state').html('☆');

      // ボタンの切り替え
      $('#add-bookmarks').removeClass('uk-hidden');
      $('#delete-bookmarks').addClass('uk-hidden');

    }).fail(function(jqXHR, textStatus, errorThrown){
      if(jqXHR.status == 403){
        alert("ログイン後に実行してください。");
      } else {
        alert("エラーが発生しました。リロードして再度実行してください。");
      }
    });
  });
});
