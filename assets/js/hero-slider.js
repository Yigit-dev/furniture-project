(function($) {
 
	 /*------------------
		 Navigation
	 --------------------*/
	 $('.nav-switch').on('click', function(event) {
		 $(this).toggleClass('active');
		 $('.main-menu').slideToggle(400);
		 event.preventDefault();
	 });
 
 
	 /*------------------
		 Background Set
	 --------------------*/
	 $('.set-bg').each(function() {
		 var bg = $(this).data('setbg');
		 $(this).css('background-image', 'url(' + bg + ')');
	 });
 
 
	 /*------------------
		 Hero Slider
	 --------------------*/
		 var bigimage = $(".hero-slider");
		 var thumbs = $(".hero-nav-slider");
		 var syncedSecondary = true;
		 
		 bigimage.owlCarousel({
			 items: 1,
			 slideSpeed: 1500,
			 nav: true,
			 autoplay: true,
			 dots: false,
			 animateOut: 'fadeOut',
				 animateIn: 'fadeIn',
			 loop: true,
			 responsiveRefreshRate: 200,
			 navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
		 }).on("changed.owl.carousel", syncPosition);
		 
		 thumbs.on("initialized.owl.carousel", function() {
			 thumbs.find(".owl-item").eq(0).addClass("current");
		 }).owlCarousel({
			 dots: false,
			 nav: false,
			 smartSpeed: 200,
			 slideSpeed: 500,
			 responsiveRefreshRate: 100,
			 responsive : {
			 0 : {
				 items: 1,
				 slideBy: 1
			 },
			 576 : {
				 items: 1,
				 slideBy: 1
			 },
			 768 : {
				 items: 3,
				 slideBy: 3
			 },
		 }
		 }).on("changed.owl.carousel", syncPosition2);
		 
		 function syncPosition(el) {
			 var count = el.item.count - 1;
			 var current = Math.round(el.item.index - el.item.count / 2 - 0.5);
		 
			 if (current < 0) {
			 current = count;
			 }
			 if (current > count) {
			 current = 0;
			 }
			 thumbs.find(".owl-item").removeClass("current").eq(current).addClass("current");
			 var onscreen = thumbs.find(".owl-item.active").length - 1;
			 var start = thumbs .find(".owl-item.active").first() .index();
			 var end = thumbs.find(".owl-item.active").last() .index();
		 
			 if (current > end) {
			 thumbs.data("owl.carousel").to(current, 100, true);
			 }
			 if (current < start) {
			 thumbs.data("owl.carousel").to(current - onscreen, 100, true);
			 }
		 }
		 
		 function syncPosition2(el) {
			 if (syncedSecondary) {
			 var number = el.item.index;
			 bigimage.data("owl.carousel").to(number, 100, true);
			 }
		 }
		 
		 thumbs.on("click", ".owl-item", function(e) {
			 e.preventDefault();
			 var number = $(this).index();
			 bigimage.data("owl.carousel").to(number, 300, true);
		 });
 })(jQuery);
 