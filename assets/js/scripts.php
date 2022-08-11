<script type="text/javascript">

	jQuery(window).load(function () {
		$('#preloader').addClass('disabled');
	});

	jQuery(window).ready(function($) {

		// Configurações do slide
		/* $('.slug').flickity({
			// fade: true,
			contain: true,
			autoPlay: 3000,
			pageDots: true,
			wrapAround: true,
			cellAlign: 'left',
			prevNextButtons: false,
		}); */

		// Add/remove classe com rolagem
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();
			if (scroll >= 100) {
				$('.box-return').addClass("active");
			} else {
				$('.box-return').removeClass("active");
			}
		});

	});
</script>