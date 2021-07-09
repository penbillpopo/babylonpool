//scroll reveal
window.sr = ScrollReveal({
	reset: false,
	distance: '20px',
	scale: 1,
	easing: 'ease-in-out',
	duration: 800,
	viewFactor: 0.5
});
sr.reveal('.reveal_bottom', {
	origin: 'bottom'
});
sr.reveal('.reveal_bottom_d300', {
	origin: 'bottom',
	delay: 300
});
sr.reveal('.reveal_bottom_d600', {
	origin: 'bottom',
	delay: 600
});
sr.reveal('.reveal_left', {
	origin: 'left'
});
sr.reveal('.reveal_left_d200', {
	origin: 'left',
	delay: 200
});
sr.reveal('.reveal_left_d400', {
	origin: 'left',
	delay: 400
});
sr.reveal('.reveal_left_d600', {
	origin: 'left',
	delay: 600
});
sr.reveal('.reveal_left_d800', {
	origin: 'left',
	delay: 800
});
sr.reveal('.reveal_right', {
	origin: 'right',
	viewFactor: 0.2
});
sr.reveal('.reveal_right_d200', {
	origin: 'right',
	delay: 200,
	viewFactor: 0.2
});
sr.reveal('.reveal_right_d400', {
	origin: 'right',
	delay: 400,
	viewFactor: 0.2
});
sr.reveal('.reveal_right_d600', {
	origin: 'right',
	delay: 600,
	viewFactor: 0.2
});

sr.reveal('.reveal_scale', {
	distance: '0px',
	scale: 0.9
});
sr.reveal('.reveal_surfing', {
	beforeReveal: (el)=>{ el.classList.add('is-surfing') }
});

$(window).scroll(function () {
	if (window.screen.width >= 1023) {
		let scrollVal = $(this).scrollTop();
		if(scrollVal>200){
			$('#navbar').addClass("reduce");
		}else{
			$('#navbar').removeClass("reduce");
		}
	}
});

$(window).resize(function() {
	if (window.screen.width < 1023) {
		$('#navbar').removeClass("reduce");
	}
});