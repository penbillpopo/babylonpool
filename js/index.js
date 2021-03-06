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
	var WaveAreaSwiper = new Swiper('#waveField .swiper-container', {
		slidesPerView: 4,
		spaceBetween: 0,
		loop: true,
		speed: 800,
		autoplay: {
			delay: 5000,
		},
		navigation: {
			nextEl: '#waveField .swiper-button-next',
			prevEl: '#waveField .swiper-button-prev',
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
});


