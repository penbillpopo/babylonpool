//nav
$("#hambuger .menu-btn").click(function () {
	if (!$('.navitem').hasClass('active')) {
		$('.navitem').addClass('active');
		$("body").css("overflow", "hidden");
		$('#nav_blackfield').css("display", "block");
		setTimeout(function () {
			$('#nav_blackfield').css("opacity", "1");
		}, 100);
	} else {
		$('.navitem').removeClass('active');
		$("body").css("overflow", "scroll");
		$('#nav_blackfield').css("opacity", "0");
		$('#nav_blackfield').css("display", "none");
	}
});
$("#nav_blackfield").click(function () {
	$('#hambuger .menu-btn').prop('checked', false);
	$('.navitem').removeClass('active');
	$("body").css("overflow", "scroll");
	$('#nav_blackfield').css("opacity", "0");
	$('#nav_blackfield').css("display", "none");
});