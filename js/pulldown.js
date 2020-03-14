/**
  下記より引用
  https://kodocode.net/design-css-selectlist/
*/

$(function(){
  $(".custom-select").each(function() {
    var classes = $(this).attr("class"),
        id      = $(this).attr("id"),
        name    = $(this).attr("name");
    var template =  '<div class="' + classes + '">';
        template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
        template += '<div class="custom-options">';
        $(this).find("option").each(function() {
          template += '<span class="genre-selector custom-option ' + $(this).attr("class") + '"genre-id="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
        });
    template += '</div></div>';

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
  });
});

$(function(){
  $(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
  }, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
  });
});

$(function(){
  $(".custom-select-trigger").on("click", function() {
    $('html').one('click',function() {
      $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
  });
});

$(function(){
  $(".custom-option").on("click", function() {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
  });
});

$(function(){
  $(".genre-selector").on("click", function(){
    // 既存の選択ジャンルを非表示に
    var beforeGenre = $('.book-genre-select');
    beforeGenre.addClass("book-genre");
    beforeGenre.addClass("uk-hidden");
    beforeGenre.removeClass("book-genre-select");

    // 指定したジャンルの本一覧に切り替え
    var afterGenreId = '#' + $(this).attr('genre-id');
    var afterGenre = $(afterGenreId);
    afterGenre.removeClass("book-genre");
    afterGenre.removeClass("uk-hidden");
    afterGenre.addClass("book-genre-select");
  });


});
