$(window).on('scroll', function(){
	if ($(window).scrollTop()) {
		$('topBannerNav').addClass('sticky');
	}
	else
	{
		$('topBannerNav').removeClass('sticky');
	}
})