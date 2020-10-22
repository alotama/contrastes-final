var news__title = $('.course__container .header__section').outerHeight(true),
    course__img = $('.course__img').outerHeight(true);
    news__container = $('.course__container').height(),
    news__height = news__container - news__title

function search_filter_category() {
  $('.search__filter.search__filter--category').on('click', function () {
    $(this).children().removeClass('js-active');
  });
}

function tag_item() {
  $('.tag__item').click(function () {
    $(this).toggleClass('js-active')
  });
}

function filter__category() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".search__filter--category");

    $button_group.append("<div class='js-category-selected'></div>");
    var $bottom_line = $(".js-category-selected");

    $bottom_line
    .width($(".filter__container").innerWidth())
    .css("left", $(".filter__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".search__filter--category .filter__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function filter__level() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".search__filter--level");

    $button_group.append("<div class='js-level-selected'></div>");
    var $bottom_line = $(".js-level-selected");

    $bottom_line
    .width($(".filter__container").innerWidth())
    .css("left", $(".filter__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".search__filter--level .filter__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function pagination() {
  $('.pagination__container .pagination__item').on('click', function () {
    $('.pagination__item').removeClass('js-item__onView')
    if ($(this).not('.js-item__onView')) {
      $(this).addClass('js-item__onView')
    }
  });
}

$(document).ready(function () {
  $('.news__content').height(news__height);
  search_filter_category();
  tag_item();
  filter__category();
  filter__level();
  pagination();
});
