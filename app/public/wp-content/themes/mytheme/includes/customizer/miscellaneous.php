<?php
function sj_miscellaneous_customizer_section( $wp_customize ){
    $wp_customize->add_section( 'sj_miscellaneous_section', array(
		'title'         =>  __( 'Fossil Miscellaneous Settings', 'mytheme' ),
		'priority'      =>  30
    ));
    
    /**
     * Checkbox Example
     */
	$wp_customize->add_setting( 'sj_show_search_setting', array(
        'default'          =>  0
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_miscellaneous_search_icon',
		array(
			'label'        =>  __( 'Show Header Search Icon', 'mytheme' ),
			'section'      => 'sj_miscellaneous_section',
			'settings'     => 'sj_show_search_setting',
            'type'         => 'checkbox'
		)
    ));

    /**
     * Dropdown Example
     */
	$wp_customize->add_setting( 'sj_redirect_privacy_policy_setting', array(
        'default'          =>  0
	));
	$wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sj_miscellaneous_footer_privacy',
		array(
			'label'        =>  __( 'Select page for privacy redirect', 'mytheme' ),
			'section'      => 'sj_miscellaneous_section',
			'settings'     => 'sj_redirect_privacy_policy_setting',
			'type'         =>  'dropdown-pages'
		)
    ));
}