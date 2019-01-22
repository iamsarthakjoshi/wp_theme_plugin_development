<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================

$options = array();

$shortcodes[]     = array(
  'name'          => 'idea_gallery',
  'title'         => 'Idea Gallery',
  'shortcodes'    => array(

    array(
      'name'      => 'idea_gallery',
      'title'     => 'Idea Gallery',
      'fields'    => array(
       array(

						'id'      => 'columns',

						'type'    => 'select',

						'title'   => 'Columns per row',

						'options' => array(

							'1' => '1',

							'2' => '2',

							'3' => '3',

							'4' => '4',

						),

						'default' => '4',

					),

					array(

						'id'      => 'orderby',

						'type'    => 'select',

						'title'   => 'Order by',

						'options' => array(

							'title'         => 'Title',

							'date'          => 'Date',

							'rand'          => 'Random',

						),

						'default' => 'date',

					),

					array(

						'id'      => 'order',

						'type'    => 'select',

						'title'   => 'Order',

						'options' => array(

							'ASC'  => 'Ascending',

							'DESC' => 'Descending',

						),

						'default' => 'DESC',

					),
      ),
    ),

  )
);

CSFramework_Shortcode_Manager::instance( $shortcodes );