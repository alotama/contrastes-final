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

function add_desafios() {
	$('.desafio-showcase__container').on('click',function () {
		$(this).find($('.overlay')).toggleClass('js-overlay-active')
	})
}

$(document).ready(function () {
	add_desafios();
})
