<?php
/**
 * Slider section for the homepage.
 */
if ( ! function_exists( 'spiceb_honeypress_slider' ) ) :

	function spiceb_honeypress_slider() {
		
		$home_slider_image = get_theme_mod('home_slider_image',SPICEB_PLUGIN_URL .'inc/honeypress/images/slider/slider.jpg');
		$home_slider_title = get_theme_mod('home_slider_title',__('We Provide Quality Business Solution','spicebox'));
		
		$home_slider_discription = get_theme_mod('home_slider_discription',__('Sea summo mazim ex, ea errem eleifend definitionem vim. Ut nec hinc dolor possim <br> mei ludus  efficiendi ei sea summo mazim ex.','spicebox'));
		$home_slider_btn_txt = get_theme_mod('home_slider_btn_txt',__('Read More','spicebox'));
		$home_slider_btn_link = get_theme_mod('home_slider_btn_link',__(esc_url('#'),'spicebox'));
		$home_slider_btn_target = get_theme_mod('home_slider_btn_target',false);

		$home_slider_btn_txt2 = get_theme_mod('home_slider_btn_txt2',__('About Us','spicebox'));
		$home_slider_btn_link2 = get_theme_mod('home_slider_btn_link2',__(esc_url('#'),'spicebox'));
		$home_slider_btn_target2 = get_theme_mod('home_slider_btn_target2',false);
		
		$home_page_slider_enabled = get_theme_mod('home_page_slider_enabled','on');
		if($home_page_slider_enabled !='off') {
		?>
	<section class="hero-section">
	<div class="back-img" style="background-image:url(<?php echo $home_slider_image; ?>);">
		<?php $slider_image_overlay = get_theme_mod('slider_image_overlay',true);
			$slider_overlay_section_color = get_theme_mod('slider_overlay_section_color','rgba(0,0,0,0.6)');
			if($slider_image_overlay != false) { ?>
			<div class="overlay" style="background-color:<?php echo $slider_overlay_section_color;?>"></div>
			<?php } ?>
			<div class="container slider-caption">
					<div class="caption-content text-center">
						
						<?php if ( ! empty( $home_slider_title ) || is_customize_preview() ) { ?>
						<h1 class="title"><?php echo $home_slider_title;  ?></h1>
						<?php } 
						if ( ! empty( $home_slider_discription ) || is_customize_preview() ) {
						?>
						<p class="description"><?php echo $home_slider_discription; ?></p>
						<?php } ?>
						
						<div class="btn-combo mt-5">	
						<?php if(!empty($home_slider_btn_txt)):?>			
						<a <?php if($home_slider_btn_link) { ?> href="<?php echo $home_slider_btn_link; } ?>" 
						<?php if($home_slider_btn_target) { ?> target="_blank" <?php } ?> class="btn-small btn-default">
						<?php if($home_slider_btn_txt) { echo $home_slider_btn_txt; } ?></a>
					<?php endif;?>
						<?php
						if(!empty($home_slider_btn_txt2)):?>
						<a <?php if($home_slider_btn_link2) { ?> href="<?php echo $home_slider_btn_link2; } ?>" 
						<?php if($home_slider_btn_target2) { ?> target="_blank" <?php } ?> class="btn-small btn-light about-tbn">
						<?php if($home_slider_btn_txt2) { echo $home_slider_btn_txt2; } ?></a>
					<?php endif;?>
						</div>
						<?php } ?>						
					</div>	
				</div>	
			</div>
	</section>
		<?php
	}
endif;
if ( function_exists( 'spiceb_honeypress_slider' ) ) {
$section_priority = apply_filters( 'honeypress_section_priority', 11, 'spiceb_honeypress_slider' );
add_action( 'spiceb_honeypress_sections', 'spiceb_honeypress_slider', absint( $section_priority ) );
}