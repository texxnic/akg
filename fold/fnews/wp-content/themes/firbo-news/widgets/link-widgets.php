<?php 
// register RANDOM widget
	function register_randomNews__widget() {
	    register_widget( 'RandomNews__widget' );
	}
	add_action( 'widgets_init', 'register_randomNews__widget' );
	
	// register TAGS widget

	function register_tags__widget() {
	    register_widget( 'tags__widget' );
	}
	add_action( 'widgets_init', 'register_tags__widget' );

	function register_social__widget() {
	    register_widget( 'social__widget' );
	}
	add_action( 'widgets_init', 'register_social__widget' );
	
?>