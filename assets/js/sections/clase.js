var sidebarBox = document.querySelector('#aside__container'),
overlay = document.querySelector('.overlay-clase'),
overlayBtn = document.querySelector('.play-button'),
sidebarBtn = document.querySelector('#hamburger__container');

sidebarBtn.addEventListener('click', function (event) {
		sidebarBtn.classList.toggle('active');
		sidebarBox.classList.toggle('active');
		overlay.classList.toggle('is-active');
});

overlayBtn.addEventListener('click', function (event) {
		overlay.classList.toggle('is-active');
    sidebarBtn.classList.remove('active');
    sidebarBox.classList.remove('active');
});

window.addEventListener('keydown', function (event) {

		if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
				sidebarBtn.classList.remove('active');
				sidebarBox.classList.remove('active');
				overlay.classList.remove('is-active');
		}
});
