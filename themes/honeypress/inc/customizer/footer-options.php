<?php
function honeypress_footer_customizer ( $wp_customize )
{
	$wp_customize->add_section('footer_section',
		array(
			'title' => esc_html__('Footer Settings','honeypress'),
			'description'    => esc_html__( 'Footer Settings:', 'honeypress' ),
			'priority' => 10,
			'panel' => 'honeypress_theme_panel',
		)
	);

/************************* Eanble Footer *********************************/

	$wp_customize->add_setting('footer_enable',
		array(
			'default' => true,
			'sanitize_callback' => 'honeypress_sanitize_checkbox'
			)
	);

	$wp_customize->add_control(new Honeypress_Toggle_Control( $wp_customize, 'footer_enable',
		array(
			'label'    => __( 'Hide/Show Footer', 'honeypress' ),
			'section'  => 'footer_section',
			'type'     => 'ios',
			'priority' 				=> 1,
		)
	));

/************************* Copyright *********************************/
	$wp_customize->add_setting('footer_copyright', 
		array(
			'default'=>	'<p>'.__( 'Proudly powered by <a href="https://wordpress.org"> WordPress</a> | Theme: <a href="https://spicethemes.com" rel="nofollow">HoneyPress</a> by SpiceThemes', 'honeypress' ).'</p>',
			'capability'        =>  'edit_theme_options',
			'sanitize_callback'=> 'honeypress_sanitize_text',
		)
	);

	$wp_customize->add_control('footer_copyright', 
		array(
			'label'=> __('Copyright Content','honeypress'),
			'section'=> 'footer_section',
			'type'=> 'textarea',
			'priority'=> 2,
			'active_callback'=> 'honeypress_footer_callback'
		)
	);

}
add_action('customize_register','honeypress_footer_customizer');