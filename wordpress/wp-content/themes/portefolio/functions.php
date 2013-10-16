<?php 

	add_action('widgets_init','portefolio_widgets_init');
	add_action( 'after_setup_theme', 'portefolio_setup' );
	add_action( 'init', 'create_post_type' );

	function portefolio_widgets_init(){

		register_sidebar( array(
		'name' => __( 'Main Sidebar', 'portefolio' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Secondary Sidebar', 'portefolio' ),
		'id' => 'sidebar-2',
		'description' => __( 'The description', 'portefolio' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	}

	function portefolio_setup(){
		register_nav_menu( 'primary', __( 'Primary Menu', 'portefolio' ) );
	}

	function create_post_type() {
		register_post_type( 'projets',
			array(
				'labels' => array(
					'name' => __( 'Projets' ),
					'singular_name' => __( 'Projet' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','author','custom-fields','excerpt','thumbnail'),
			'taxonomy' => ('travaux')
			)
		);

		register_post_type( 'menu',
			array(
				'labels' => array(
					'name' => __( 'Menu' ),
					'singular_name' => __( 'Menu' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','author','custom-fields','excerpt','thumbnail')
			)
		);

		register_post_type( 'galerie',
			array(
				'labels' => array(
					'name' => __( 'Galerie' ),
					'singular_name' => __( 'Galerie' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','author','custom-fields','excerpt','thumbnail')
			)
		);
		register_post_type( 'moi',
			array(
				'labels' => array(
					'name' => __( 'Moi' ),
					'singular_name' => __( 'Moi' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','author','custom-fields','excerpt','thumbnail')
			)
		);
		register_post_type( 'catpro',
			array(
				'labels' => array(
					'name' => __( 'Catégories Projets' ),
					'singular_name' => __( 'Catégorie Projets' )
				),
			'public' => true,
			'has_archive' => true,
			'supports' => array('title','editor','author','custom-fields','excerpt','thumbnail')
			)
		);
	
}


	