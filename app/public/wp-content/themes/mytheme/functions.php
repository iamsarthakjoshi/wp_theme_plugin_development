<?php
// Setup


// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');

// Hooks
add_action('wp_enqueue_scripts', 'sj_enqueue');
add_action('after_setup_theme', 'sj_setup_theme');
add_action('widgets_init', 'sj_widgets');
function mytheme_customize_register($wp_customize) {
$wp_customize->add_section( 'sj_social_section', array(
   'title'                     =>  __( 'Udemy Social Settings', 'udemy' ),
   'priority'                  =>  30,
   'panel'                     =>  'udemy'
 ));
 
$wp_customize->add_setting( 'sj_facebook_handle', array(
   'default'                   =>  '',
 ));
 
 $wp_customize->add_control(new WP_Customize_Control(
   $wp_customize,
   'sj_social_facebook_input',
   array(
      'label'                 =>  __( 'Facebook Handle', 'theme_name' ),
      'section'               => 'sj_social_section',
      'settings'              => 'sj_facebook_handle',
      'type'                  =>  'text'
   )
));
}
add_action('customize_register', 'mytheme_customize_register');

// Filters
function sj_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
 }
 add_filter( 'comment_form_fields', 'sj_move_comment_field_to_bottom' );

 /**
  * Hide the search widget when on the search page, otherwise it will inherit the changes we made for that page. 
  * Besides, it makes no sense to have two search forms next to each other on the same page.
  */
 function sj_disable_search_widget_on_search_page($sidebar_widgets) {
    if ( is_search() && is_array( $sidebar_widgets['sj_sidebar'] ) ) {
       foreach ($sidebar_widgets['sj_sidebar'] as $i => $widget) {
          if( strpos($widget, 'search') !== false ) {
             unset($sidebar_widgets['sj_sidebar'][$i]);
          }
       }
    }
    return $sidebar_widgets;
 }
 add_filter('sidebars_widgets', 'sj_disable_search_widget_on_search_page');

// Shortcodes