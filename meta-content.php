<?php
$content = array(
    'about' => array(
    	'type' => 'fieldset',
    	'elements' => array(
    	    'title' => array(
    			'type' => 'text',
    			'label' => 'About Title',
    			'required' => true
    		),
    		'text' => array(
    			'type' => 'wysiwyg',
    			'label' => 'About Text',
    			'rows' => 14,
    			'required' => true
    		)
    	)
    ),
    'portfolio' => array(
    	'type' => 'fieldset',
    	'elements' => array(
    	    'title' => array(
    			'type' => 'wysiwyg',
    			'label' => 'Section Text',
    			'rows' => 14,
    			'required' => true
    		),
    		'items' => array(
    			'type' => 'repeatable',
    			'title' => 'Portfolio Items',
    			'description' => 'Add portfolio items.',
    			'empty-to-show' => 4,
    			'elements' => array(
    				'screenshot' => array(
    					'type' => 'image',
    					'label' => 'Screenshot',
    					'required' => true,
    					'versions' => array(
    						'intro' => array(
    							'width' => 242,
    							'height' => 180,
    							'crop' => array( 'center', 'center' )
    						),
    						'details' => array(
    							'width' => 400,
    							'height' => 300,
    							'crop' => array( 'center', 'center' )
    						)
    					)
    				),
    				'title' => array(
    					'type' => 'text',
    					'label' => 'Portfolio Item Title',
    					'required' => true
    				),
    				'text' => array(
    					'type' => 'wysiwyg',
    					'label' => 'Portfolio Item Text',
    					'required' => true
    				)
    			)
    		)
    	)
    ),
	'entries' => array(
		'type' => 'repeatable',
		'title' => 'Entries',
		'description' => 'Add, remove or organize your entries.',
		'empty-to-show' => 1,
		'elements' => array(
			'title' => array(
				'type' => 'text',
				'label' => 'Title',
				'tip' => 'e.g. "My Entry Title".',
				'required' => true
			),
			'entry' => array(
				'type' => 'wysiwyg',
				'label' => 'Entry',
				'required' => true
			)
		)
	),
	'contact' => array(
		'type' => 'fieldset',
		'elements' => array(
		    'title' => array(
				'type' => 'text',
				'label' => 'Contact Title',
				'required' => true
			),
			'text' => array(
				'type' => 'wysiwyg',
				'label' => 'Contact Text',
				'rows' => 14,
				'required' => true
			)
		)
	)
);