$(function(){
  // ユーザIDのバリデーション
  $('.user-id').change(function(){
    $input = $(this).val();

    if(isEmpty($input.trim())){
      errors.push('ユーザIdが未入力です');
    }

    if(!isEmpty(errors)){
      var errorMsg = '<ul class="uk-list uk-margin-left uk-margin-remove-bottom">';
      errors.forEach((error)=>{
        errorMsg += '<li class="uk-margin-small-top">' + error + '</li>'
      });
      errorMsg += '</ul>';
      $('.sm-error-msg').html(errorMsg);
    } else {
      $('.sm-error-msg').html('');
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
