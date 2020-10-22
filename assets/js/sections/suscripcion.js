function carouselActive() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".suscripcion__controllers");

    $button_group.append("<div id='js-button-selected'></div>");
    var $bottom_line = $("#js-button-selected");

    $bottom_line
    .width($(".controller__container").innerWidth())
    .css("left", $(".controller__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".suscripcion__controllers .controller__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function carousel__desafios() {
  var $carousel = $('.suscripcion__carousel').flickity({
    pageDots: false,
    prevNextButtons: false,
    draggable: false,
    cellAlign: 'left'
  });

  $('.suscripcion__controllers').on( 'click', '.controller__container', function() {
    $('.controller__container').removeClass('js-selected');
    var index = $(this).index();
    $carousel.flickity( 'select', index, false, true );
    $(this).addClass('js-selected');
  });

  $('.suscripcion__controllers').on('click', '.controller_container', function() {


  });
  $(window).resize(function () {
    $('.controller_container.js-selected').removeClass('js-selected');
    $('.controller_container').first().addClass('js-selected');
  })
}

$(document).ready(function () {
  carouselActive();
  carousel__desafios();
})

$(window).resize(function () {
  carouselActive();
  carousel__desafios();
})
