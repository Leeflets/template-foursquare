<?php
namespace User\Template;

class Code extends \Leeflets\Template\Code {
	function setup_hooks() {
	    $this->enqueue_style( 'style', 'css/component.css' );
	    $this->enqueue_script( 'modernizr', 'js/modernizr.custom.js' );
	    $this->enqueue_script( 'jquery', '', '', '', true );
	    $this->enqueue_script( 'boxlayout', 'js/boxlayout.js', '','1.0', true );
	}
}
