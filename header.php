<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ClimateActNow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-49655226-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-49655226-8');
</script><meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta property=og:url content=https://climateactnow.com.au><meta property=og:type content=website><meta property=og:title content="Keep Australia Safe"><meta property=og:description content="Sign the petition for the National Climate Act to put plans in place that protect our way of life."><meta property=og:image content=https://climate-act-images.s3-ap-southeast-2.amazonaws.com/can-og.png><?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="screen, handheld" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css<?php echo '?' . current_time('timestamp'); ?>" media="screen, handheld" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/climateact.css" media="screen, handheld" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/enhanced.css<?php echo '?' . current_time('timestamp'); ?>" media="screen  and (min-width: 768px)" />

	
	
<body <?php body_class(); ?>>
	<div class="header">
		<div class="wrap">
			<div class="logo"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php get_bloginfo( 'name' ); ?>"/></a></div>			
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			
			<a href="#" class="menu-trigger"></a>
		</div>
		<a class="signups" href="https://join.climateactnow.com.au"><?php echo ($GLOBALS['totalSignUps'] > 0 ? $GLOBALS['totalSignUps'] : 'loading...'); ?> <strong>sign ups</strong></a>
	</div>
	
	<?php if(get_field('ticker_content') != ''): ?>
	
		<?php if(get_field('ticker_link') != ''): ?>
			<a href="<?php echo get_field('ticker_link'); ?>" target="_blank" class="ticker-wrap"><span class="ticker"><?php echo get_field('ticker_content'); ?></span></a>
		<?php else: ?>
			<div class="ticker-wrap"><span class="ticker"><?php echo get_field('ticker_content'); ?></span></div>
		<?php endif; ?>
	<?php endif; ?>
	
	
<div id="site-wrapper">
	
<div class="dm-hero">
		<div class="dm-center-div-hero">
			<div class="dm-container-text">
				<img src="<?php echo get_template_directory_uri(); ?>/images/Logo_75by35.svg" class="dm-logo-hero">
				<p class="dm-text-hero">Zali Steggall OAM MP is urgently calling for Australia to commit to a minimum 75% emissions reduction by 2035. To meet the Paris Agreement goal of limiting global warming to 1.5C, host a COP Summit and emerge as a leader in climate action, Australia needs to match our ambition to our international peers and accelerate emissions reduction.</p>
				<p><a href="https://www.zalisteggall.com.au/climate" class="btn dm-btn-hero"><span>Sign up</span> to show your support </a></p>
			</div>
		</div>
	<?php if(get_field('add_a_video_header')){ 
		$add_a_video_header = get_field('add_a_video_header');
		$poster_video 		= get_field('poster_video');
	?>
		<video id="dm-hero-div" loop preload='none' autoplay muted width="100%" poster="<?php echo $poster_video; ?>">
		<source id="mp4" src="<?php echo $add_a_video_header; ?>" type='video/mp4' />
		<p>Your user agent does not support the HTML5 Video element.</p>
	</video> 
	<?php } ?>
	
</div>