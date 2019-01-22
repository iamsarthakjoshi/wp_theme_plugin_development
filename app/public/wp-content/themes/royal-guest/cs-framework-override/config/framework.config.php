<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Iplanetarium Settings',
  'menu_type'       => 'theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'wp-drizzle-framework',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options <small>by WP Drizzle</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$options        = array();

// Slider options.
$options[]    = array(
  'name'      => 'slider_section',
  'title'     => 'Slider Section',
  'icon'      => 'fa fa-sliders',
  'fields'    => array(
    // a text field
    array(
          'id'              => 'slider_section_id',
          'type'            => 'group',
          'title'           => 'Sliders',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Slider',
          'fields'          => array(
       
            array(
              'id'          => 'btn_txt',
              'type'        => 'text',
              'title'       => 'Button Text',
            ),
            array(
              'id'          => 'btn_txt_link',
              'type'        => 'text',
              'title'       => 'Button Link',
            ),
                        array(
              'id'          => 'slider_content',
              'type'        => 'textarea',
              'title'       => 'Slider Content',
            ),     
            array(
              'id'    => 'header_logo_upload',
              'type'  => 'image',
              'title' => 'Silder Image',
            ),       
          ),
        ),             
  )
);

function wpdz_get_terms_list() {
    $arr = [];
    $terms = get_terms( array(
        'taxonomy' => 'download_category',
        'hide_empty' => true,
    ) );

    foreach ( $terms as $value ) {
        $name = $value->name;
        $id = $value->term_id;
        $arr[ $id ] = $name;
    }
    return $arr;
}

// Featured options.
$options[]    = array(
  'name'      => 'featured_section',
  'title'     => 'Featured Section',
  'icon'      => 'fa fa-cog',
  'fields'    => array(
    // a text field
    array(
          'id'              => 'featured_cat',
          'type'            => 'select',
          'title'           => 'Featured Category',
          'desc'           => 'Select multiple category:',
          'options'        => wpdz_get_terms_list(),
          'attributes' => array(
            'multiple' => 'multiple',
          ),
        ),             
  )
);

// Video cat blocks options.
$options[]    = array(
  'name'      => 'vid_cat_block_section',
  'title'     => 'Video Category Blocks',
  'icon'      => 'fa fa-video-camera',
  'fields'    => array(
    // a text field
    array(
          'id'              => 'vid_cat_block_section_id',
          'type'            => 'group',
          'title'           => 'Video Category Block',
          'button_title'    => 'Add New',
          'accordion_title' => 'Add New Video Block',
          'fields'          => array(
            array(
              'id'              => 'vid_cat_id',
              'type'            => 'select',
              'title'           => 'Video Block Category',
              'desc'           => 'Select Video Block Category:',
              'options'        => wpdz_get_terms_list(),
            ),
            array(
              'id'              => 'vid_cat_block_title',
              'type'            => 'text',
              'title'           => 'Video Block Category Title',
            ),  
            array(
              'id'              => 'vid_cat_block_sub_title',
              'type'            => 'textarea',
              'title'           => 'Video Block Category Sub Title',
            ), 
          ),
        ),             
  )
);

// CTA options.
$options[]    = array(
  'name'      => 'cta_section',
  'title'     => 'CTA Section',
  'icon'      => 'fa fa-anchor',
  'fields'    => array(
    // a text field
    array(
          'id'              => 'cta_title',
          'type'            => 'text',
          'title'           => 'Title',
        ),
     array(
          'id'              => 'cta_sub_title',
          'type'            => 'text',
          'title'           => 'Sub Title',
        ),   
    array(
      'id'              => 'cta_btn_txt',
      'type'            => 'text',
      'title'           => 'Button Text',
    ), 
     array(
      'id'              => 'cta_btn_url',
      'type'            => 'text',
      'title'           => 'Button URL',
    ),             
  )
);

// AD options.
$options[]    = array(
  'name'      => 'ad_section',
  'title'     => 'AD Section',
  'icon'      => 'fa fa-th-large',
  'fields'    => array(
    // a text field
    array(
          'id'              => 'ad_title',
          'type'            => 'textarea',
          'title'           => 'Shortcode',
          'desc'           => 'Insert shortcode or HTML here:',
          'shortcode'       => true,
        ),         
  )
);

CSFramework::instance( $settings, $options );