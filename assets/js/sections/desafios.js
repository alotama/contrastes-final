var sidebarBox = document.querySelector('#aside__container'),
sidebarBtn = document.querySelector('#hamburger__container');

sidebarBtn.addEventListener('click', function (event) {
		sidebarBtn.classList.toggle('active');
		sidebarBox.classList.toggle('active');
});

window.addEventListener('keydown', function (event) {

		if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
		}
});

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

  $('.append-cell__container--1').css('height',$('.courses-carousel__contrainer--1 .course__img').height())
}

function carousel__courses2() {
  var $carousel = $('.course__carousel--2').flickity({
    pageDots: false,
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    prevNextButtons: false,
  });

  $('.append-cell__container--2').on( 'click', function() {
    var $cellElems = $( makeCellHtml() + makeCellHtml() );
    $carousel.flickity( 'append', $cellElems );
  });

  var cellCount =
    '<a href="#">' + '<div class="course__card">' + '<figure class="course__img">' + '<img src="../assets/img/500x500.png" alt="">' + '</figure>' + '<div class="course__title">' + '<h5>Paisajes</h5>' + '</div>' + '</div>' + '</a>'
  ;

  function makeCellHtml() {
    return '<div class="course__cell">' + cellCount + '</div>';
  }

  $('.append-cell__container--2').css('height',$('.courses-carousel__contrainer--2 .course__img').height())
}

function carousel__courses3() {
  var $carousel = $('.course__carousel--3').flickity({
    pageDots: false,
    cellAlign: 'left',
    contain: true,
    wrapAround: false,
    prevNextButtons: false,
  });

  $('.append-cell__container--3').on( 'click', function() {
    var $cellElems = $( makeCellHtml() + makeCellHtml() );
    $carousel.flickity( 'append', $cellElems );
  });

  var cellCount =
    '<a href="#">' + '<div class="course__card">' + '<figure class="course__img">' + '<img src="../assets/img/500x500.png" alt="">' + '</figure>' + '<div class="course__title">' + '<h5>Paisajes</h5>' + '</div>' + '</div>' + '</a>'
  ;

  function makeCellHtml() {
    return '<div class="course__cell">' + cellCount + '</div>';
  }

  $('.append-cell__container--3').css('height',$('.courses-carousel__contrainer--3 .course__img').height())
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
  var $carousel = $('.carousel').flickity({
    groupCells: true,
    prevNextButtons: false,
    cellAlign: 'left',
    pageDots: false,
    wrapAround: false,
    accesibility: false,
    draggable: false,
  });

  $('.showcase-desafios__controllers').on( 'click', '.controller_container', function() {
    $('.controller_container').removeClass('js-controller-selected')
    var selector = $(this).attr('data-selector');
    $carousel.flickity( 'selectCell', selector, false, true );
    $(this).addClass('js-controller-selected')
  });
}

$(document).ready(function () {
  carousel__courses1();
  carousel__courses2();
  carousel__courses3();
	filter__category();
	carousel__desafios();
});
