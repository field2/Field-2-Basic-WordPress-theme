<?php


/*
register_sidebar(array(
  'name' => 'Newsletter',
  'id' => 'newsletter',
  'description' => 'Widgets in this area will be shown in the sidebar.',
  'before_title' => '<h2>',
  'after_title' => '</h2>'
));
*/

/*
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'photos',
		array(
			'labels' => array(
				'name' => __( 'Photos' ),
				'singular_name' => __( 'Photo' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'photos'),
		'supports' => array('title', 'editor')


		)
	);
	register_post_type( 'poems',
		array(
			'labels' => array(
				'name' => __( 'Poems' ),
				'singular_name' => __( 'Poem' )
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'poems'),
		'supports' => array('title', 'editor')
		)
	);
}

*/
/*
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails', array( 'photos' )); 
}
*/