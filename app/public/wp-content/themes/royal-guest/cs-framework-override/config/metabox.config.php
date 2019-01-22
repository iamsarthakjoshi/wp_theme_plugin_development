<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page banner Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_duke_page_meta_options',
  'title'     => 'Page Details',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'duke_page_meta',
      // begin: fields
      'fields' => array(
        array(
          'id'    => 'duke_banner_switch',
          'type'  => 'switcher',
          'title' => 'Page Banner',
        ),
        array(
          'id'        => 'banner_fieldset',
          'type'      => 'fieldset',
          'title'     => '',
          'dependency'=> array( 'duke_banner_switch', '==', 'true' ),
          'fields'    => array(
            array(
              'id'    => 'duke_banner_title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            // end: a field        
            array(
              'id'    => 'duke_banner_subtitle',
              'type'  => 'text',
              'title' => 'Subtitle',
            ),
            array(
              'id'    => 'duke_banner_image',
              'type'  => 'image',
              'title' => 'Banner Image',
            ),             
            array(
              'id'    => 'duke_desc_image',
              'type'  => 'image',
              'title' => 'Caption Image',
            ),            
          ),
        ),
      ),
    ),
  ),
);
$options[]    = array(
  'id'        => '_duke_events_meta_options',
  'title'     => 'Event Details',
  'post_type' => 'duke-events',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    // begin: a section
    array(
      'name'  => 'duke_events_meta',
      // begin: fields
      'fields' => array(
        array(
          'id'        => 'event_fields',
          'type'      => 'fieldset',
          'title'     => '',
          'fields'    => array(      
            array(
              'id'    => 'duke_event_details',
              'type'  => 'textarea',
              'title' => 'Event Details',
            ),
            // end: a field        
            array(
              'id'    => 'duke_event_image',
              'type'  => 'image',
              'title' => 'Event Image',
            ),                   
          ),
        ),
      ),
    ),
  ),
);

// -----------------------------------------
// Home Page Metabox Options                    -
// -----------------------------------------

$options[]  = array(
  'id'        => '_duke_home_meta_options',
  'title'     => 'Home Page options',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(
    array(
      'name'  => 'duke_home_meta',
      // begin: fields
      'fields' => array(
        array(
          'id'        => 'featured_group_title',
          'type'      => 'fieldset',
          'title'     => 'Market Section Heading',
          'fields'    => array(
            array(
              'id'    => 'duke_ft_title',
              'type'  => 'text',
              'title' => 'Title',
            ),            
            array(
              'id'    => 'duke_ft_subtitle',
              'type'  => 'text',
              'title' => 'Subtitle',
            ),            
            array(
              'id'    => 'duke_ft_icon',
              'type'  => 'image',
              'title' => 'Image',
            ),
          ),
        ),
        array(
          'id'        => 'Market_group',
          'type'      => 'group',
          'title'     => 'Featured Market Blocks',
          'button_title'    => 'Add New Blocks',
          'accordion_title' => 'Add New Blocks',
          'fields'    => array(
            array(
              'id'    => 'duke_market_block_title',
              'type'  => 'text',
              'title' => 'Title',
            ),
            // end: a field        
            array(
              'id'    => 'duke_market_block_subtitle',
              'type'  => 'text',
              'title' => 'Subtitle',
            ),
            array(
              'id'    => 'duke_market_block_image',
              'type'  => 'image',
              'title' => 'Market Block Image',
            ),              
            array(
              'id'    => 'duke_market_block_btn_txt',
              'type'  => 'text',
              'title' => 'Market Block Button Text',
            ),            
            array(
              'id'    => 'duke_market_block_btn_link',
              'type'  => 'text',
              'title' => 'Market Block Button Link',
            ),            
          ),
        ),
        array(
          'id'        => 'newsletter_group',
          'type'      => 'fieldset',
          'title'     => 'Join Us Section',
          'fields'    => array(
            array(
              'id'    => 'duke_join_title',
              'type'  => 'text',
              'title' => 'Title',
            ),            
            array(
              'id'    => 'duke_join_subtitle',
              'type'  => 'text',
              'title' => 'Subtitle',
            ),            
            array(
              'id'    => 'duke_join_image',
              'type'  => 'image',
              'title' => 'Background',
            ),            
            array(
              'id'    => 'duke_join_shortcode',
              'type'  => 'textarea',
              'title' => 'Mailchimp Shortcode',
            ),
          ),
        ),             
        array(
          'id'        => 'insta_group',
          'type'      => 'fieldset',
          'title'     => 'Instagram Section',
          'fields'    => array(
            array(
              'id'    => 'duke_insta_title',
              'type'  => 'text',
              'title' => 'Title',
            ),            
            array(
              'id'    => 'duke_insta_subtitle',
              'type'  => 'text',
              'title' => 'Subtitle',
            ),                      
            array(
              'id'    => 'duke_insta_user',
              'type'  => 'text',
              'title' => 'Instagram Username',
            ),            
            array(
              'id'    => 'duke_insta_background',
              'type'  => 'image',
              'title' => 'Instagram Section Background',
            ),
          ),
        ),     
      array(
        'id'        => 'home_map_seciton',
        'type'      => 'fieldset',
        'title'     => 'Map Seciton',
        'fields'    => array(
            array(
              'id'    => 'duke_map_title',
              'type'  => 'text',
              'title' => 'Title',
            ),            
            array(
              'id'    => 'duke_map_subtitle',
              'type'  => 'textarea',
              'title' => 'Subtitle',
            ),             array(
              'id'    => 'duke_map_btn',
              'type'  => 'text',
              'title' => 'Button Title',
            ),             array(
              'id'    => 'duke_map_btn_link',
              'type'  => 'text',
              'title' => 'Button Link',
            ),             array(
              'id'    => 'duke_map_addr',
              'type'  => 'textarea',
              'title' => 'Address',
            ),            
            array(
              'id'    => 'duke_map_img',
              'type'  => 'image',
              'title' => 'Background',
            ),
          ),
        ),      
      array(
        'id'        => 'home_events_seciton',
        'type'      => 'fieldset',
        'title'     => 'Events Seciton',
        'fields'    => array(          
            array(
              'id'    => 'duke_events_title',
              'type'  => 'text', 
              'title' => 'Title',
            ),            
            array(
              'id'    => 'duke_events_subtitle',
              'type'  => 'text', 
              'title' => 'Subtitle',
            ),
          ),
        ),
      ),
    ),
  ),
);



CSFramework_Metabox::instance( $options );
