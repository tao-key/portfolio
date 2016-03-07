$(window).scroll(function() {

	if($(window).scrollTop() == 0){
		$('#scrollToTop').fadeOut("fast");
	} else {
		if($('#scrollToTop').length == 0){
			$('body').append('<div id="scrollToTop">'+
				'<a href="#">Retour haut de page</a>'+
				'</div>');
		}
		$('#scrollToTop').fadeIn("fast");
	}

	$('#scrollToTop a').bind('click', function(){
		$('html, body').animate({scrollTop: 0}, 'slow', function(){
			$('html, body').stop(true);
		});
	});

});