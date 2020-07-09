<?php
/**
 * The header for our theme
 *
 * @package Honeypress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php endif; ?>
	<?php wp_head();?>	
	</head>
	<body <?php body_class();?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#wrapper"><?php esc_html_e( 'Skip to content', 'honeypress' ); ?></a>
		<?php get_template_part('inc/header/header-nav');
		global $template;
		global $woocommerce;
		if(basename($template)!='template-business.php'):
			honeypress_breadcrumbs();
		endif; ?>
		<div id="wrapper">