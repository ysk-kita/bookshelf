$(function(){
  $('.pagination-tab').on('click', function(){
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
});
