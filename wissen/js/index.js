var preloader = document.getElementById('preloader');

setTimeout(function() {
	$('#preloader').fadeOut();
}, 2200);

$('a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var target = this.hash;
	var $target = $(target);
	$('html, body')
		.stop()
		.animate(
			{
				scrollTop: $target.offset().top,
			},
			900,
			'swing',
			function() {
				window.location.hash = target;
			}
		);
});

// $('.gradient').ripples({
// 	resolution: 512,
// 	dropRadius: 20, //px
// 	perturbance: 0.04,
// });
