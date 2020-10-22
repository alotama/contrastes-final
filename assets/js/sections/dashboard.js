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

$(document).ready(function () {
  carousel__courses1();
  carousel__courses2();
});
