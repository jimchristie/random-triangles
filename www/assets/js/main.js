jQuery(document).ready(function($){

	/**
	 * shows the main nav when at mobile sizes
	 */
	function showMobileNav(){
		var height = $("#main-nav").height();
		var properties = {
			height: 0,
			display: 'block'
		};

		$("#main-nav").css(properties);


		$("#main-nav").animate( 
			{height: height},
			300
		);
	}

	function hideMobileNav(){
		$("#main-nav").animate( 
			{height: 0}, 
			300,
			function(){
				clearStyles("#main-nav");
			}
		);
	}

	/**
	 * removes any css added by showMobileNav()
	 * @param {object} element a jQuery object containing an HTML object
	 */
	function clearStyles(element){
		$(element).removeAttr("style");
	}

	/**
	 * checks to see if the nav is visible
	 * @return {bool}
	 */
	function mainNavIsVisible(){
		return $("#main-nav").css('display') !== 'none' ;
	}

	$("#mobile-nav button").on('click', function(){
		if(mainNavIsVisible())
			hideMobileNav();
		else 
			showMobileNav();
	})

	$(window).resize(function(){
		if (window.innerWidth >= 768)
			clearStyles("#main-nav");
	});
});