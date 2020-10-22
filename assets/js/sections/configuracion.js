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

function filter__category() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".setting__controllers");

    $button_group.append("<div class='js-is-selected'></div>");
    var $bottom_line = $(".js-is-selected");

    $bottom_line
    .width($(".controller_container").innerWidth())
    .css("top", $(".controller_container").position().top)
    .data("origLeft", $bottom_line.position().top)
    .data("origWidth", $bottom_line.innerWidth());


    $(".setting__controllers .controller_container").click(function() {
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

  $('.setting__controllers').on( 'click', '.controller_container', function() {
    $('.controller_container').removeClass('js-controller-selected')
    var selector = $(this).attr('data-selector');
    $carousel.flickity( 'selectCell', selector, false, true );
    $(this).addClass('js-controller-selected')
  });
}

function notification_new() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--news");

    $button_group.append("<div id='js-news-state'></div>");
    var $bottom_line = $("#js-news-state");

    $bottom_line
    .width($(".switch--news .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--news .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_events() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--events");

    $button_group.append("<div id='js-events-state'></div>");
    var $bottom_line = $("#js-events-state");

    $bottom_line
    .width($(".switch--events .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--events .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_likes() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--likes");

    $button_group.append("<div id='js-likes-state'></div>");
    var $bottom_line = $("#js-likes-state");

    $bottom_line
    .width($(".switch--likes .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--likes .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_comment() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--comment");

    $button_group.append("<div id='js-comment-state'></div>");
    var $bottom_line = $("#js-comment-state");

    $bottom_line
    .width($(".switch--comment .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--comment .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_download() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--download");

    $button_group.append("<div id='js-download-state'></div>");
    var $bottom_line = $("#js-download-state");

    $bottom_line
    .width($(".switch--download .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--download .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_course() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--course");

    $button_group.append("<div id='js-course-state'></div>");
    var $bottom_line = $("#js-course-state");

    $bottom_line
    .width($(".switch--course .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--course .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_suscription() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--suscription");

    $button_group.append("<div id='js-suscription-state'></div>");
    var $bottom_line = $("#js-suscription-state");

    $bottom_line
    .width($(".switch--suscription .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--suscription .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function notification_conjunto() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--conjunto");

    $button_group.append("<div id='js-conjunto-state'></div>");
    var $bottom_line = $("#js-conjunto-state");

    $bottom_line
    .width($(".switch--conjunto .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--conjunto .item__container").click(function() {
        $el = $(this);
        leftPos = $el.position().left;
        newWidth = $el.innerWidth();
        $bottom_line.stop().animate({
            left: leftPos,
            width: newWidth
        });
    });
}

function forma_pago() {
  // Add class active to section on viewport
    var $el, leftPos, newWidth,
        $button_group = $(".switch--pago");

    $button_group.append("<div id='js-pago-state'></div>");
    var $bottom_line = $("#js-pago-state");

    $bottom_line
    .width($(".switch--pago .item__container").innerWidth())
    .css("left", $(".item__container").position().left)
    .data("origLeft", $bottom_line.position().left)
    .data("origWidth", $bottom_line.innerWidth());


    $(".switch--pago .item__container").click(function() {
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
	carousel__desafios();
	notification_new();
	notification_events();
	notification_likes();
	notification_comment();
	notification_download();
	notification_course();
	notification_conjunto();
	notification_suscription();
	forma_pago();
});
