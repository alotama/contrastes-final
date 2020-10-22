function carousel__courses() {
  var $carousel = $('.course__carousel').flickity({
    pageDots: false,
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    prevNextButtons: false,
  });

  $('.append-cell__container').on( 'click', function() {
    var $cellElems = $( makeCellHtml() + makeCellHtml() );
    $carousel.flickity( 'append', $cellElems );
  });

  var cellCount =
    '<a href="/search">' + '<div class="course__card">' + '<figure class="course__img">' + '<img src="assets/img/sections/home/contrastes-cursos-5.jpg" alt="">' + '</figure>' + '<div class="course__title">' + '<h5>Paisajes</h5>' + '</div>' + '</div>' + '</a>'
  ;

  function makeCellHtml() {
    return '<div class="course__cell">' + cellCount + '</div>';
  }

  $('.append-cell__container').css('height',$('.courses-carousel__contrainer .course__img').height())
}

function carousel__school() {
  var $carousel = $('.concept-carousel__carousel').flickity({
    groupCells: true,
    prevNextButtons: false,
    cellAlign: 'left',
    pageDots: false,
    wrapAround: false,
    accesibility: false,
    draggable: false,
  });

  $('.concept__controllers').on( 'click', '.controller-concept__container', function() {
    $('.controller-concept__container').removeClass('js-controller-selected')
    var selector = $(this).attr('data-selector');
    $carousel.flickity( 'selectCell', selector, false, true );
    $(this).addClass('js-controller-selected')
  });
}

function filter__category() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".showcase-desafios__controllers");

    $button_group.append("<div class='js-is-selected'></div>");
    var $bottom_line = $(".js-is-selected");

    $bottom_line
    .width($(".controller_container").innerWidth())
    .css("top", $(".controller_container").position().top)
    .data("origLeft", $bottom_line.position().top)
    .data("origWidth", $bottom_line.innerWidth());


    $(".showcase-desafios__controllers .controller_container").click(function() {
        $el = $(this);
        leftPos = $el.position().top;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            top: leftPos,
            width: newWidth
        });
    });
}

function carousel__desafios() {
  if ($(window).outerWidth() > 992) {
    var $carousel = $('.carousel').flickity({
      groupCells: true,
      prevNextButtons: false,
      cellAlign: 'left',
      pageDots: false,
      wrapAround: false,
      accesibility: false,
      draggable: false,
    });
  } else {
    var $carousel = $('.carousel').flickity({
      groupCells: true,
      prevNextButtons: false,
      cellAlign: 'left',
      pageDots: false,
      wrapAround: false,
      accesibility: true,
      draggable: true,
    });
  }


  $('.showcase-desafios__controllers').on( 'click', '.controller_container', function() {
    $('.controller_container').removeClass('js-controller-selected')
    var selector = $(this).attr('data-selector');
    $carousel.flickity( 'selectCell', selector, false, true );
    $(this).addClass('js-controller-selected')
  });
}

$(document).ready(function () {
  carousel__courses();
  carousel__school();
  filter__category();
  carousel__desafios();
});

$(window).resize(function () {
  filter__category();
  if ($(window).outerWidth() > 992) {
    carousel__courses();
    carousel__school();
    carousel__desafios();
	}
})
