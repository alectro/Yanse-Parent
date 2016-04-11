<?php
add_filter( 'rwmb_meta_boxes', 'YOURPREFIX_register_meta_boxes' );
function YOURPREFIX_register_meta_boxes( $meta_boxes ) {
    $prefix = 'mb_';
    // 1st meta box
    /**********************
    Careers
     **********************/

    // Job Additional Information
    $meta_boxes[] = array(
    	'id'    => 'additional',
    	'title' => 'Additional Information',
    	'pages' => array('careers'),
    	'context' => 'normal',
    	'priority' => 'low',

    	'fields'	=> array(
    						// Requirements
    						array(
    							'name' => 'Requirements',
    							'desc' => "Describe all the desired requirements for this position.",
    							'id'   => "{$prefix}requirements",
    							'type' => 'wysiwyg',
    							'rows' => 3
    						),
    						// Responsibility
    						array(
    							'name' => 'Responsibility',
    							'desc' => "Describe all the desired responsibilities for this position.",
    							'id'   => "{$prefix}responsibility",
    							'type' => 'textarea',
    							'rows' => 3
    						),
    						// Skills
    						array(
    							'name' => 'Skills',
    							'desc' => "Choose desired skills.",
    							'id'   => "{$prefix}skills",
    							'type' => 'text',
    							'clone' => true
    		),
    	)
    );
    // Job Details
    $meta_boxes[] = array(
    	'id'		=> 'job_offer',
    	'title'		=> 'Job Details',
    	'pages' => array('careers'),
    	'context' => 'side',
    	'priority' => 'high',

    	'fields'	=> array(
    						array(
    							'name'	=> 'Job ID',
    							'id'	=> "{$prefix}id",
    							'desc'	=> 'Alphanumeric value.',
    							'type'	=> 'text'
    						),
    						// Period Start
    						array(
    							'name'	=> 'Starting From',
    							'id'	=> "{$prefix}period_start",
    							'type'	=> 'date',
    							'format'=> 'yy/mm/dd'
    						),
    						// Period End
    						array(
    							'name'	=> 'Starting End',
    							'id'	=> "{$prefix}period_end",
    							'type'	=> 'date',
    							'format'=> 'yy/mm/dd'
    						),
    						// Location
    						array(
    							'name'	=> 'Location',
    							'id'	=> "{$prefix}location",
    							'type'	=> 'select',
    							'options' => array(
    								__('Beijing', 'yanse')			=> 'Beijing',
    								__('China' , 'yanse')			=> 'China',
    								__('Uruguay' , 'yanse')			=> 'Uruguay',
    								__('Anywhere' , 'yanse')		=> 'Anywhere',
    							)
    						),
    						// Type
    						array(
    							'name'	=> 'Type',
    							'id'	=> "{$prefix}type",
    							'type'	=> 'checkbox_list',
    							'options' => array(
    								__('Full-time', 'yanse')		=> 'Full-time',
    								__('Part-time', 'yanse')		=> 'Part-time',
    								__('Freelance', 'yanse')		=> 'Freelance',
    							)
    						),
    						// Languages
    						array(
    							'name'	=> 'Select the language',
    							'id'	=> "{$prefix}language",
    							'type'	=> 'checkbox_list',
    							'options' => array(
    								__('Chinese', 'yanse')			=> 'Chinese',
    								__('English', 'yanse')			=> 'English',
    								__('Spanish', 'yanse')			=> 'Spanish',
    								__('Portuguese', 'yanse')		=> 'Portuguese',
    							),
    							'std'  => array( 'English','Chinese' )
    						),
    						// Education
    						array(
    							'name'	=> 'Education Level',
    							'id'	=> "{$prefix}education",
    							'type'	=> 'checkbox_list',
    							'options' => array(
    								__('Undergraduate', 'yanse')	=> 'Undergraduate',
    								__('College', 'yanse')			=> 'College',
    								__('Postgraduate', 'yanse')		=> 'Postgraduate',
    								__('Others', 'yanse')			=> 'Others',
    							)
    						),
    						// Open Positions
    						array(
    							'name'	=> 'How many open positions?',
    							'id'	=> "{$prefix}vacancies",
    							'type'	=> 'select',
    							'options' => array(
    								'1'		=> '1',
    								'2'		=> '2',
    								'3'		=> '3',
    								'4'		=> '4',
    								'5'		=> '5',
    								'6'		=> '6',
    								'7'		=> '7',
    								'8'		=> '8',
    								'9'		=> '9',
    								'10'	=> '10',
    							),
    							'std'  => '1'
    						),
    				)
    );
    /**********************
    WORKS
     **********************/
    $meta_boxes[] = array(
    	'id'		=> 'images',
    	'title'		=> 'Work images',
    	'pages' => array('works' ),

    	'fields'	=> array(
    			// NEW(!) PLUPLOAD IMAGE UPLOAD (WP 3.3+)
    			array(
    				'desc'	=> 'Upload single or multiple images for your works. Works will be added automatically to your page.',
    				'id'	=> "{$prefix}items",
    				'type'	=> 'plupload_image'
    			),
    		),
    );




    	// 2nd meta box
    	$meta_boxes[] = array(
    	'pages' => array('works'),
    	'context' => 'side',
    	'priority' => 'high',

    		'title' => __( 'Work details', 'yanse' ),
    		'desc' => __( 'Some additional information about this project.', 'yanse' ),

    		'fields' => array(
    			// HEADING
    			array(
    				'type' => 'heading',
    				'id'   => 'details', // Not used but needed for plugin
    			),

    			// Project
    			array(
    				'name'     => __( 'Project\'s nature', 'yanse' ),
    				'id'       => "{$prefix}nature",
    				'type'     => 'select',
    				// Array of 'value' => 'Label' pairs for select box
    				'options'  => array(
    					'Client' => __( 'Client', 'yanse' ),
    					'Pro bono' => __( 'Pro bono', 'yanse' ),
    					'Personal' => __( 'Personal', 'yanse' ),
    				),
    				// Select multiple values, optional. Default is false.
    				'multiple'    => false,
    				'std'         => 'client',
    				'desc' => __( 'Whether is a client\'s or a personal project.', 'yanse' ),
    			),



    			// DIVIDER
    			array(
    				'type' => 'divider',
    				'id'   => 'divider', // Not used, but needed
    			),

    			// Client
    			array(
    				// Field name - Will be used as label
    				'name'  => __( 'Client', 'yanse' ),
    				// Field ID, i.e. the meta key
    				'id'    => "{$prefix}clients",
    				'type'  => 'text',
    				// CLONES: Add to make the field cloneable (i.e. have multiple value)
    				'clone' => true,
    			),


    			// DIVIDER
    			array(
    				'type' => 'divider',
    				'id'   => 'divider', // Not used, but needed
    			),

    			// Country
    			array(
    				// Field name - Will be used as label
    				'name'  => __( 'Country', 'yanse' ),
    				// Field ID, i.e. the meta key
    				'id'    => "{$prefix}countries",
    				'type'  => 'text',
    				// CLONES: Add to make the field cloneable (i.e. have multiple value)
    				'clone' => true,
    			),


    			// DIVIDER
    			array(
    				'type' => 'divider',
    				'id'   => 'divider', // Not used, but needed
    			),


    			// YEAR
    			array(
    				'name' => __( 'Year of creation', 'yanse' ),
    				'id'   => "{$prefix}year",
    				'type' => 'date',

    				// jQuery date picker options. See here http://api.jqueryui.com/datepicker
    				'js_options' => array(
    					'dateFormat'      => __( 'yy', 'yanse' ),
    					'changeMonth'     => false,
    					'changeYear'      => true,
    					'showButtonPanel' => true,
    				),
    			),

    			// DIVIDER
    			array(
    				'type' => 'divider',
    				'id'   => 'divider', // Not used, but needed
    			),

    			// Color
    			array(
    				'name' => __( 'Color picker', 'yanse' ),
    				'id'   => "{$prefix}color",
    				'type' => 'color',
    			),

    			// DIVIDER
    			array(
    				'type' => 'divider',
    				'id'   => 'divider', // Not used, but needed
    			),

    			// Featured image size
    			array(
    				'name'	=> 'Featured image size',
    				'id'	=> "{$prefix}featuredsize",
    				'type'	=> 'select',
    				'options' => array(
    					'large'		=> 'Large',
    					'medium'	=> 'Medium',
    					'small'		=> 'Small',
    				)
    			)


    		)
    	);




    	return $meta_boxes;
    }
    ?>
