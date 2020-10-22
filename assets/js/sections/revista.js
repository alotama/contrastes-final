function hero__highlight() {
  $('.highlight-note__carousel').flickity({
    cellAlign: 'left',
    wrapAround: true,
    initialIndex: 2,
    prevNextButtons: false,
  })
}

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
    '<a href="#">' + '<div class="course__card">' + '<figure class="course__img">' + '<img src="../assets/img/300x400.png" alt="">' + '</figure>' + '<div class="course__title">' + '<h5>Paisajes</h5>' + '</div>' + '</div>' + '</a>'
  ;

  function makeCellHtml() {
    return '<div class="course__cell">' + cellCount + '</div>';
  }

  $('.append-cell__container').css('height',$('.courses-carousel__contrainer .course__img').height())
}

$(document).ready(function () {
  hero__highlight();
  carousel__courses();
})
