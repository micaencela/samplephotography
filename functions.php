<?php 
    ob_start();
	//register resources

	function register_resources(){

		//register a menu
		register_nav_menu('main-menu','Main Menu');


		//register a section
		$arg = array(
			'labels' => array(
				'name'=> 'Sections',
				'singular_name' => 'Section',
				'menu_name' => 'Sections'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);

		$arg2 = array(
			'labels' => array(
				'name'=> 'Services',
				'singular_name' => 'Service',
				'menu_name' => 'Services'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		$arg3 = array(
			'labels' => array(
				'name'=> 'Portfolio',
				'singular_name' => 'Portfolio',
				'menu_name' => 'Portfolio'
			),
			'public' => true,
			'show_in_nav_menues' => true,
		);
		register_post_type('section',$arg);
		register_post_type('service',$arg2);
		register_post_type('portfolio',$arg3);

		


	}

	add_action('init','register_resources');

	//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);

	
 ?>


