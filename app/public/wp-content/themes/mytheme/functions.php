<?php
// Setup


// Includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/widgets.php');
include(get_template_directory() . '/includes/theme-customizer.php');
include(get_template_directory() . '/includes/customizer/social.php');
include(get_template_directory() . '/includes/customizer/miscellaneous.php');

// Hooks
add_action('wp_enqueue_scripts', 'sj_enqueue');
add_action('after_setup_theme', 'sj_setup_theme');
add_action('widgets_init', 'sj_widgets');
add_action('customize_register', 'sj_customize_register');

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