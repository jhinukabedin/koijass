$(document).ready(function(){
	$('#nav').slicknav();
	$("#responsive-video").fitVids();
	$(".client_crousel").owlCarousel({
		items: 4,
		itemsDesktop:[1199,4],
		navigation: true,
		theme: "angle-only",
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
	});
	$(".testimonial_list").owlCarousel({
		singleItem: true,
		pagination: false,
		theme: "angle-only-paged",
		autoPlay: true,
	});
	
	//sticky
	$(".header_area").sticky({topSpacing:0});
	
	// count
	$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 8000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
	});
	// jQuery scroll spy
        $('body').scrollspy({ 
            target: '.navbar-collapse',
            offset: 95
        });
		
	// smoothScroll
		smoothScroll.init({
				speed: 200,
				easing: 'easeInOutCubic',
				offset: 1,
				updateURL: true,
				callback: function ( toggle, anchor ) {}
			});	
		
		//WOW	
		new WOW().init();	
});
