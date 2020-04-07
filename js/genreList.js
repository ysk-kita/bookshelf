$(function(){
  // ジャンル変更が入ったらそのジャンルのページに切り替える
  $('#genre-selector').change(function() {
    window.location.href = '/genreList.php?genre=' + $(this).val() + '&pages=1';
  });

  // ジャンル変更のセレクトボックスの値を書き換える
  $(window).on('load', function() {
    paramDict = toDictGetParameter($(location).attr('search'));
    $('#genre-selector').val(paramDict['genre']);
  });
});

// getパラメータを辞書型に変換する
function toDictGetParameter(url){
  var getParams = url.split('?')[1].split('&');
  var dict = {};

  getParams.forEach(getParam => {
    var key = getParam.split('=')[0];
    var value = getParam.split('=')[1];
    dict[key] = value;
  });
  return dict;
}
