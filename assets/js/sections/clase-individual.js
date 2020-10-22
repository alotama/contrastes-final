// external js: flickity.pkgd.js

var $carousel = $('.student__carousel').flickity({
  draggable: false,
  pageDots: false,
  prevNextButtons: false,
  freeScroll: false,
  wrapAround: false,
  accessibility: false,
});

$('.button-group').on( 'click', '.button__container', function() {
  var index = $(this).index();
  $carousel.flickity( 'select', index, false, true );
});

function filter__category() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".button-group");

    $button_group.append("<div class='js-selected'></div>");
    var $bottom_line = $(".js-selected");

    $bottom_line
    .width($(".button__container").innerWidth())
    .css("left", $(".button__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".button-group .button__container").click(function() {
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
  filter__category();
})
