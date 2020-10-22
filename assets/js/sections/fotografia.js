function carousel__courses1() {
  var $carousel = $('.course__carousel--1').flickity({
    pageDots: false,
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    prevNextButtons: false,
  });

  $('.append-cell__container--1').on( 'click', function() {
    var $cellElems = $( makeCellHtml() + makeCellHtml() );
    $carousel.flickity( 'append', $cellElems );
  });

  var cellCount =
    '<a href="#">' + '<div class="course__card">' + '<figure class="course__img">' + '<img src="../assets/img/500x500.png" alt="">' + '</figure>' + '<div class="course__title">' + '<h5>Paisajes</h5>' + '</div>' + '</div>' + '</a>'
  ;

  function makeCellHtml() {
    return '<div class="course__cell">' + cellCount + '</div>';
  }

  $('.append-cell__container').css('height',$('.courses-carousel__contrainer .course__img').height())
}

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
        $button_group = $(".search__filter--payment");

    $button_group.append("<div class='js-category-selected'></div>");
    var $bottom_line = $(".js-category-selected");

    $bottom_line
    .width($(".filter__container").innerWidth())
    .css("left", $(".filter__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".search__filter--payment .filter__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

$(document).ready(function () {
  carousel__courses1();
  search_filter_category();
  tag_item();
  filter__category();
})
