const swiper = new Swiper(".mySwiper", {
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev",
	},
});


const button = document.querySelector('.js-button');
if (button) {
	button.addEventListener('click', () => {
		console.log(button);
		button.classList.toggle('btn-primary');
	})
}

const text = document.querySelector('.js-text');
if (text) {
	text.textContent = "JS text";
}

const preloader = document.querySelector('.js-preloader');
if (preloader) {
	console.log(preloader);
	document.addEventListener("DOMContentLoaded", () => {
		preloader.classList.add('preloader--hide')
	});
}