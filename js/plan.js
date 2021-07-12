$(function () {
	var imgAreaMobile = new Swiper('#imgAreaMobile .swiper-container', {
		slidesPerView: 3,
		spaceBetween: 0,
		loop: true,
		speed: 800,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: "#imgAreaMobile .swiper-pagination",
		},
		breakpoints: {
			// when window width is >= 480px
			580: {
			  slidesPerView: 2,
			},
			768: {
			  slidesPerView: 3,
			},
		}
	});
});

