<?php
/**
 * Testimonial section for the homepage.
 */
if ( ! function_exists( 'spiceb_honeypress_testimonial' ) ) :
function spiceb_honeypress_testimonial() {

$testimonial_section_enable = get_theme_mod('testimonial_section_enable','on');
if($testimonial_section_enable !='off')
{

$testimonial_overlay_section_color = get_theme_mod('testimonial_overlay_section_color','rgba(0, 76, 236, 0.9)');
 ?>
<section class="section-module testimonial" style="background-color:<?php echo $testimonial_overlay_section_color; ?>">
	<div class="container">
		<?php
		$home_testimonial_section_title = get_theme_mod('home_testimonial_section_title',__('What People Say','spicebox'));
		$home_testimonial_section_discription = get_theme_mod('home_testimonial_section_discription',__('What Clients Are Say','spicebox'));
		$home_testimonial_title = get_theme_mod('home_testimonial_title',__('Alice Culan','spicebox'));
		$home_testimonial_designation= get_theme_mod('home_testimonial_designation',__('UI Developer','spicebox'));
		$home_testimonial_thumb = get_theme_mod('home_testimonial_thumb',SPICEB_PLUGIN_URL .'inc/honeypress/images/testimonial/testi1.jpg');
		$home_testimonial_desc = get_theme_mod('home_testimonial_desc',__('Sed ut Perspiciatis Unde Omnis Iste Sed ut perspiciatis unde omnis iste natu error sit voluptatem accu tium neque fermentum veposu miten a tempor nise. Duis autem vel eum iriure dolor in hendrerit in vulputate velit consequat reprehender in voluptate velit esse cillum duis dolor fugiat nulla pariatur.','spicebox'));?>
		<?php if( $home_testimonial_section_title != '' || $home_testimonial_section_discription != '') { ?>		
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">
					<div class="section-header text-center">
						<div class="section-separator white border-center"></div>
						<p class="section-subtitle text-white">
						<?php echo esc_attr($home_testimonial_section_title); ?>
						</p>
						<h2 class="section-title text-white">
						<?php echo esc_attr($home_testimonial_section_discription); ?>
						</h2>
					</div>
				</div>
			</div>
		<?php } ?>
		<div class="row">
			<div class="col-md-12">
				<article class="testmonial-block text-center">
					<?php if($home_testimonial_thumb !=''){ ?>
						<figure class="avatar">
							<img src="<?php echo $home_testimonial_thumb; ?>" class="img-fluid rounded-circle" alt="img">
						</figure>
					<?php } ?>				
					<div class="entry-content">
						<p class="text-white"><?php echo $home_testimonial_desc;  ?></p>
					</div>									
					<figcaption>
						<cite class="name"><?php echo $home_testimonial_title; ?></cite>
						<span class="designation"><?php echo $home_testimonial_designation; ?></span>
					</figcaption>
				</article>
			</div>
		</div>
	</div>	
</section>
<div class="clearfix"></div>
<?php } 
}
endif;
	if ( function_exists( 'spiceb_honeypress_testimonial' ) ) {
	$section_priority = apply_filters( 'honeypress_section_priority', 13, 'spiceb_honeypress_testimonial' );
	add_action( 'spiceb_honeypress_sections', 'spiceb_honeypress_testimonial', absint( $section_priority ) );
}