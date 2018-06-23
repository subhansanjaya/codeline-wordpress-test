<?php

// create new post type to insert films
function create_post_type() {
  register_post_type( 'film',
    array(
      'labels' => array(
        'name' => __( 'Films' ),
        'singular_name' => __( 'Film' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );


// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_film_taxonomies', 0 );

// create taxonomies for the post type "film"
function create_film_taxonomies() {

	$labels = array(
		'name'              => _x( 'Genres', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Genre', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Genres', 'textdomain' ),
		'all_items'         => __( 'All Genres', 'textdomain' ),
		'parent_item'       => __( 'Parent Genre', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Genre:', 'textdomain' ),
		'edit_item'         => __( 'Edit Genre', 'textdomain' ),
		'update_item'       => __( 'Update Genre', 'textdomain' ),
		'add_new_item'      => __( 'Add New Genre', 'textdomain' ),
		'new_item_name'     => __( 'New Genre Name', 'textdomain' ),
		'menu_name'         => __( 'Genre', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'genre' ),
	);

	register_taxonomy( 'genre', array( 'film' ), $args );

	$labels = array(
		'name'                       => _x( 'Countries', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Country', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Countries', 'textdomain' ),
		'popular_items'              => __( 'Popular Countries', 'textdomain' ),
		'all_items'                  => __( 'All Countries', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
		'update_item'                => __( 'Update Writer', 'textdomain' ),
		'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
		'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate countries with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove countries', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used countries', 'textdomain' ),
		'not_found'                  => __( 'No countries found.', 'textdomain' ),
		'menu_name'                  => __( 'Countries', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'country' ),
	);

	register_taxonomy( 'country', 'film', $args );


	$labels = array(
		'name'                       => _x( 'Years', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Year', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Years', 'textdomain' ),
		'popular_items'              => __( 'Popular Years', 'textdomain' ),
		'all_items'                  => __( 'All Years', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
		'update_item'                => __( 'Update Writer', 'textdomain' ),
		'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
		'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate years with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove years', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used years', 'textdomain' ),
		'not_found'                  => __( 'No years found.', 'textdomain' ),
		'menu_name'                  => __( 'Years', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'year' ),
	);

	register_taxonomy( 'year', 'film', $args );


	$labels = array(
		'name'                       => _x( 'Actors', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Actor', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Actors', 'textdomain' ),
		'popular_items'              => __( 'Popular Actors', 'textdomain' ),
		'all_items'                  => __( 'All Actors', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Writer', 'textdomain' ),
		'update_item'                => __( 'Update Writer', 'textdomain' ),
		'add_new_item'               => __( 'Add New Writer', 'textdomain' ),
		'new_item_name'              => __( 'New Writer Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate actors with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove actors', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used actors', 'textdomain' ),
		'not_found'                  => __( 'No actors found.', 'textdomain' ),
		'menu_name'                  => __( 'Actors', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'actor' ),
	);

	register_taxonomy( 'actor', 'film', $args );
}


// create shortcode to show last 5 films
function showLatestFilms() {
    $films = get_posts([
        'post_type' => 'film',
        'post_status' => 'publish',
        'numberposts' => 5,
        'order'    => 'DESC'
    ]);
    $html = '<ul>';
    foreach($films as $film) {
        $html .= sprintf('<li><a href="%s">%s</a></li>', get_post_permalink($film->ID), $film->post_title);
    }
    $html .= '</ul>';
    return $html;
}
add_shortcode('latest-films', 'showLatestFilms');


// add values "Country", "Genre", "Ticket Price", "Release Date" at list of films
function add_values_to_film($content) {
    global $post;
    if ($post->post_type == 'film') {

    	$post_id = $post->ID;
        $countries = get_the_terms($post_id, "country");
        $genres     = get_the_terms($post_id, "genre");

       foreach($countries as $country)
		{
		    $countries_names[] = $country->name;
		}

		foreach($genres as $genre)
		{
		    $genre_names[] = $genre->name;
		}

        $content .= sprintf('<div><b>Countries: </b>%s</div>',  implode(',',$countries_names));
        $content .= sprintf('<div><b>Genre: </b>%s</div>',  implode(',',$genre_names));
        $content .= sprintf('<div><b>Ticket Price: </b>$%d</div>', get_post_custom_values('ticket_price', $post_id)[0]);
        $content .= sprintf('<div><b>Release Date: </b>%s', get_post_custom_values('release_date', $post_id)[0]);
    }
    return $content;
}
add_filter('the_content', 'add_values_to_film');
