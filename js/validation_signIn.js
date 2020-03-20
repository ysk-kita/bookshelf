$(function(){
  // ユーザIDのバリデーション
  $('.user-id-box').change(function(){
    if(isEmpty($(this).val().trim())){
      $('.user-id-label').addClass('sm-invalid-label');
      $(this).addClass('sm-invalid-box');
    } else {
      $('.user-id-label').removeClass('sm-invalid-label')
      $(this).removeClass('sm-invalid-box');
    }
  });
  // パスワードエリアのバリデーション
  $('.password-box').change(function(){
    if(isEmpty($(this).val().trim())){
      $('.password-label').addClass('sm-invalid-label');
      $(this).addClass('sm-invalid-box');
    } else {
      $('.password-label').removeClass('sm-invalid-label')
      $(this).removeClass('sm-invalid-box');
    }
  });
});

function isEmpty(val){
  //null or undefined or ''(空文字) or 0 or false
  if (!val) {
    if (val !== 0 && val !== false) {
        return true;
    }
  //array or object
  }else if(typeof val == 'object'){
    return Object.keys(val).length === 0;
  }
  return false; //値は空ではない
}
