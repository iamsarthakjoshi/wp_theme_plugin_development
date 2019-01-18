<?php
function sj_social_customizer_section( $wp_customize ){


	$wp_customize->add_setting( 'sj_twitter_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'sj_instagram_handle', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'sj_email', array(
		'default'                   =>  '',
	));

	$wp_customize->add_setting( 'sj_phone_number', array(
		'default'                   =>  '',
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sj_social_twitter_input',
		array(
			'label'                 =>  __( 'Twitter Handle', 'theme_name' ),
			'section'               => 'sj_social_section',
			'settings'              => 'sj_twitter_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sj_social_instagram_input',
		array(
			'label'                 =>  __( 'Instagram Handle', 'theme_name' ),
			'section'               => 'sj_social_section',
			'settings'              => 'sj_instagram_handle',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sj_social_email_input',
		array(
			'label'                 =>  __( 'Email', 'theme_name' ),
			'section'               => 'sj_social_section',
			'settings'              => 'sj_email',
			'type'                  =>  'text'
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'sj_social_phone_number_input',
		array(
			'label'                 =>  __( 'Phone Number', 'theme_name' ),
			'section'               => 'sj_social_section',
			'settings'              => 'sj_phone_number',
			'type'                  =>  'text'
		)
	));
}