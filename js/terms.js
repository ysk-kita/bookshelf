$(function(){
  // 同意するボタンの挙動
  $('#agree').on('click', function(){
    $('#terms-checkbox').attr('checked', 'checked');
    $('#terms-check').val(1);
  });

  // 同意しないボタンの挙動
  $('#disagree').on('click', function(){
    $('#terms-checkbox').removeAttr('checked');
    $('#terms-check').val(0);
  });
});
