<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ClimateActNow
 */

?>

</div> <!-- #site-wrapper -->


<footer class="page-footer">
	<div class="wrap flex">
		<div class="logo"><a href="<?php echo esc_url(home_url()); ?>"></a></div>
		<div class="footer-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
		</div>	
		<div class="social"><a href="https://www.facebook.com/climateactnow/" class="icon-facebook"></a><a href="https://twitter.com/hashtag/climateactnow" class="icon-twitter"></a><a href="https://www.instagram.com/climate_act_now/" class="icon-instagram"></a></div>
		</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script>
	
jQuery(document).ready(function () {
	
	jQuery(".menu a[href$='pdf']").attr('target','_blank');
	
	const settings = {
	arrows: false,
	dots: true,
	rows: 2,
	slidesToShow: 2,
	slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 768,
            settings: "unslick"
        }
    ]
};

const sl =  $('.slider').slick(settings);
      
jQuery(window).on('resize', function() {
   if( jQuery(window).width() > 768 &&  !sl.hasClass('slick-initialized')) {
         jQuery('.slider').slick(settings);
    }
});

jQuery('.signups').html(function (i, html) {
return html.replace(/(\d)/g, '<span>$1</span>');
});
	
				  
});
		
jQuery('.menu-trigger').on('click',function (e) {
		if (jQuery('.header').hasClass('open')) {
		jQuery('.header').removeClass('open');
		}
		else {			
		jQuery('.header').addClass('open');
		}
		e.preventDefault();
    });
	
	jQuery('.open .menu-trigger').on('click',function (e) {
		jQuery('.header').removeClass('open');
		e.preventDefault();
    });

</script>

<?php wp_footer(); ?>

</body>
</html>
