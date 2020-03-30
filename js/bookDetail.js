$(function(){
  $('#add-bookmarks').on('click', function(){
    var data = {
      bookId: $(this).attr('bookId'),
    };
    // ajaxで実施
    $.ajax({
      type: "POST",
      url: "/addBookmarksProcess.php",
      data: data,
    }).done(function(res){
      //alert('書籍を本棚に追加しました。');
      alert(res);

      // todo ブックマークボタンの書き換え

    }).fail(function(){
      alert('エラーが発生しました。お手数ですがやり直しをお願い致します。');
    });
  });
});
