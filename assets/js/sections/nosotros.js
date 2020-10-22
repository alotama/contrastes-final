function carousel__courses() {
  $('.container__main').flickity({
    cellAlign: 'left'
  });
  $('.container__nav').flickity({
    asNavFor: ".container__main",
    draggable: false,
    contain: true,
    pageDots: false,
    cellAlign: 'left',
    prevNextButtons: false,
  });
}

$(document).ready(function () {
  carousel__courses();
});
