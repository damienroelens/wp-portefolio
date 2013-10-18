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
			'rewrite' => array('slug' => 'category'),
			'has_archive' => true,
			'supports' => array('title','editor','author','custom-fields','excerpt','thumbnail')
			)
		);
	
}



	/**
 * Custom post type date archives
 */

/**
 * Custom post type specific rewrite rules
 * @return wp_rewrite             Rewrite rules handled by Wordpress
 */
function cpt_rewrite_rules($wp_rewrite) {
    $rules = cpt_generate_date_archives('projets', $wp_rewrite);
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
    return $wp_rewrite;
}
add_action('generate_rewrite_rules', 'cpt_rewrite_rules');

/**
 * Generate date archive rewrite rules for a given custom post type
 * @param  string $cpt        slug of the custom post type
 * @return rules              returns a set of rewrite rules for Wordpress to handle
 */
function cpt_generate_date_archives($cpt, $wp_rewrite) {
    $rules = array();

    $post_type = get_post_type_object($cpt);
    $slug_archive = $post_type->has_archive;
    if ($slug_archive === false) return $rules;
    if ($slug_archive === true) {
        $slug_archive = $post_type->name;
    }

    $dates = array(
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
            'vars' => array('year', 'monthnum', 'day')),
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})",
            'vars' => array('year', 'monthnum')),
        array(
            'rule' => "([0-9]{4})",
            'vars' => array('year'))
        );

    foreach ($dates as $data) {
        $query = 'index.php?post_type='.$cpt;
        $rule = $slug_archive.'/'.$data['rule'];

        $i = 1;
        foreach ($data['vars'] as $var) {
            $query.= '&'.$var.'='.$wp_rewrite->preg_index($i);
            $i++;
        }

        $rules[$rule."/?$"] = $query;
        $rules[$rule."/feed/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/page/([0-9]{1,})/?$"] = $query."&paged=".$wp_rewrite->preg_index($i);
    }
    return $rules;
}


function EH_get_post_type_date_link( $post_type, $year, $month = 0, $day = 0 ) {
    global $wp_rewrite;
    $post_type_obj = get_post_type_object( $post_type );
    $post_type_slug = $post_type_obj->rewrite['slug'] ? $post_type_obj->rewrite['slug'] : $post_type_obj->name;
    if( $day ) { // day archive link
        // set to today's values if not provided
        if ( !$year )
            $year = gmdate('Y', current_time('timestamp'));
        if ( !$month )
            $month = gmdate('m', current_time('timestamp'));
        $link = $wp_rewrite->get_day_permastruct();
    } else if ( $month ) { // month archive link
        if ( !$year )
            $year = gmdate('Y', current_time('timestamp'));
        $link = $wp_rewrite->get_month_permastruct();
    } else { // year archive link
        $link = $wp_rewrite->get_year_permastruct();
    }
    if ( !empty($link) ) {
        $link = str_replace('%year%', $year, $link);
        $link = str_replace('%monthnum%', zeroise(intval($month), 2), $link );
        $link = str_replace('%day%', zeroise(intval($day), 2), $link );
        return home_url( "$post_type_slug$link" );
    }
    return home_url( "$post_type_slug" );
}
