$(function () {
	var HeadSwiper = new Swiper('#headBanner .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,	
		speed: 800,
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: '#headBanner .swiper-button-next',
			prevEl: '#headBanner .swiper-button-prev',
		},
		pagination: {
			el: "#headBanner .swiper-pagination",
		},
		
	});
	var WaveAreaSwiper = new Swiper('#productField .waveArea .swiper-container', {
		slidesPerView: 4,
		spaceBetween: 0,
		loop: true,
		speed: 800,
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: '#productField .waveArea .swiper-button-next',
			prevEl: '#productField .waveArea .swiper-button-prev',
		},
		breakpoints: {
			// when window width is >= 480px
			480: {
			  slidesPerView: 2,
			},
			768: {
			  slidesPerView: 3,
			},
			1023: {
			  slidesPerView: 4,
			}
		}
	});
	var HotEventSwiper = new Swiper('#hotEventfield .swiper-container', {
		slidesPerView: 1,
		spaceBetween: 0,
		loop: true,
		speed: 800,
		pagination: {
			el: '#hotEventfield .swiper-pagination',
			clickable: true,
		},
		autoplay: {
			delay: 5000,
		},
	});
});


