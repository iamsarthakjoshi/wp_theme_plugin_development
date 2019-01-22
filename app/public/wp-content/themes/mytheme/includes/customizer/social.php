<?php
function sj_social_customizer_section( $wp_customize ){
    $wp_customize->add_section( 'sj_social_section', array(
		'title'         =>  __( 'Fossil Social Settings', 'mytheme' ),
		'priority'      =>  30
    ));
    
    /**
     * Facebook
     */
	$wp_customize->add_setting( 'sj_facebook_setting', array(
		'default'        =>  ''
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_social_facebook_input',
		array(
			'label'        =>  __( 'Facebook Profile Name', 'mytheme' ),
			'section'      => 'sj_social_section',
			'settings'     => 'sj_facebook_setting',
			'type'         =>  'text'
		)
    ));
    
    /**
     * Twitter
     */
    $wp_customize->add_setting( 'sj_twitter_setting', array(
		'default'         =>  ''
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_social_twitter_input',
		array(
			'label'         =>  __( 'Twitter Profile Name', 'mytheme' ),
			'section'       => 'sj_social_section',
			'settings'      => 'sj_twitter_setting',
			'type'          =>  'text'
		)
    ));
    
    /**
     * Instagram
     */
    $wp_customize->add_setting( 'sj_instagram_setting', array(
		'default'         =>  ''
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_social_instagram_input',
		array(
			'label'         =>  __( 'Instagram Profile Name', 'mytheme' ),
			'section'       => 'sj_social_section',
			'settings'      => 'sj_instagram_setting',
			'type'          =>  'text'
		)
    ));

    /**
     * Tel/Mob Number
     */
    $wp_customize->add_setting( 'sj_telnumber_setting', array(
		'default'         =>  ''
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_social_telnumber_input',
		array(
			'label'         =>  __( 'Tel/Mob Number Profile Name', 'mytheme' ),
			'section'       => 'sj_social_section',
			'settings'      => 'sj_telnumber_setting',
			'type'          =>  'text'
		)
    ));

    /**
     * Mail
     */
    $wp_customize->add_setting( 'sj_mail_setting', array(
		'default'         =>  ''
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_social_mail_input',
		array(
			'label'         =>  __( 'Mail Address', 'mytheme' ),
			'section'       => 'sj_social_section',
			'settings'      => 'sj_mail_setting',
			'type'          =>  'text'
		)
    ));
}