$(function(){
  // ユーザIDの未入力チェック
  $('.user-id-box').change(function(){
    if(isEmpty($(this).val().trim())){
      $('.user-id-label').addClass('sm-invalid-label');
      $(this).addClass('sm-invalid-box');
    } else {
      $('.user-id-label').removeClass('sm-invalid-label')
      $(this).removeClass('sm-invalid-box');
    }
  });
  // パスワードエリアの未入力チェック
  $('.password-box').change(function(){
    if(isEmpty($(this).val().trim())){
      $('.password-label').addClass('sm-invalid-label');
      $(this).addClass('sm-invalid-box');
    } else {
      $('.password-label').removeClass('sm-invalid-label')
      $(this).removeClass('sm-invalid-box');
    }
  });

  // 入力エリアフォーカスでヒント表示
  $('.input-hint-password').focusin(function() {
    $('#hint-password').removeClass('uk-hidden');
  }).focusout(function() {
    $('#hint-password').addClass('uk-hidden');
  });
  $('.input-hint-user-id').focusin(function() {
    $('#hint-user-id').removeClass('uk-hidden');
  }).focusout(function() {
    $('#hint-user-id').addClass('uk-hidden');
  });

  // サインアップ前にバリデーション実施
  $('#sign-up').submit(function(){
    var errors = [];
    if ($('#terms-check').val() == 0){
      errors.push('利用規約に同意してください。');
    }
    if(isInvalidUserId($('.user-id-box').val())){
      errors.push('ユーザIdが正しい形式ではありません');
    }
    if(isInvalidPassword($('.password-box').val())){
      errors.push('パスワードが正しい形式ではありません');
    }
    if (isEmpty(errors)){
      return true;
    }

    var errMsgs = '<ul class="uk-list uk-margin-remove">';
    errors.forEach((err)=>{
      errMsgs += '<li class="uk-margin-remove">' + err + '</li>';
    });
    errMsgs += '</ul>';
    $('.invalid-list').html(errMsgs);

    return false;
  });
});

/**
 * パスワードの不正チェック 以下のどれか1つでも当てはまれば不正なパラメータ
 *  半角英数字が組み合わさっていない
 *  8文字未満である
 *  16文字より多い
 */
function isInvalidPassword(password){
  return (
    !(password.match(/[a-zA-Z]+/)
      && password.match(/[0-9]+/)
      && password.match(/[!+*@`{},-/:;]+/))
    || password.length < 8
    || password.length > 16
  );
}

/**
 * ユーザIdの不正チェック 以下のどれか1つでも当てはまれば不正なパラメータ
 *  全角文字が存在する
 *  英数字以外の文字列が存在する
 *  4文字未満である
 */
function isInvalidUserId(userId){
  return (
    userId.match(/^[^\x01-\x7E\xA1-\xDF]+$/)
    || userId.match(/[^a-zA-Z0-9]+/)
    || userId.length < 4
  );
}

/**
 * 空白チェックの実施
 */
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
