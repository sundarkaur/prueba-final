<?php

// REGISTRO DE ESTILOS

   function register_enqueue_style() {
   	   $theme_data = wp_get_theme();

/* Registrando estilos */
   // bootstrap //
   wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' );

   // font awesome //
   wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css');
  
    // google fonts //
   wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Archivo+Black|Lato:400,700|Oswald');
   

    // estilos css //
   wp_register_style('css', get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');
 
   /* enqueue estilos */
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('google-fonts');
  wp_enqueue_style('css');
} 

  add_action('wp_enqueue_scripts', 'register_enqueue_style' );



   // Registro de scripts //
 function register_enqueue_scripts() {
 	 $theme_data = wp_get_theme();

   /* Deregister scripts */
  wp_deregister_script('jquery');
  wp_deregister_script('jquery-migrate');

   /* registrando scripits */
  wp_register_script('jquery3', 'https://code.jquery.com/jquery-3.3.1.min.js', null, '3.3.1', false);
  wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery3'), '1.14.3', true);
  wp_register_script('bootstrap2', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery3'), '4.1.1', true);
  wp_register_script('jquery4', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array('jquery3'), '3.3.1', true);
  wp_register_script('javascript',  get_parent_theme_file_uri('/assets/js/script.js'), array('jquery3'), null, true);

   /* Enqueue Scripts */
  wp_enqueue_script('jquery3');
  wp_enqueue_script('popper');
  wp_enqueue_script('bootstrap2');
  wp_enqueue_script('jquery4');
  wp_enqueue_script('javascript');
 }


 add_action('wp_enqueue_scripts', 'register_enqueue_scripts' );

  remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );



/**
* Remove Elements From Menu
* @return  void
* @since   1.0
* @uses    default disabled
* @see     https://codex.wordpress.org/Plugin_API/Action_Reference/admin_menu
*/
function dl_remove_menus(){


  // remove_menu_page( 'index.php' );                //Dashboard
  remove_menu_page( 'edit.php' );                    //Post
  // remove_menu_page( 'upload.php' );               //Media
  // remove_menu_page( 'edit.php?post_type=page' );  //Pages
  remove_menu_page( 'edit-comments.php' );           //comments
  // remove_menu_page( 'themes.php' );               //Appearence               
  // remove_menu_page( 'plugins.php' );              //Plugins
  // remove_menu_page( 'users.php' );                //Users
  // remove_menu_page( 'tools.php' );                //Tools
  // remove_menu_page( 'options-general.php' );      //Settings

}

add_action( 'admin_menu' , 'dl_remove_menus' );




if ( ! function_exists('about_CPT') ) {

// Register Custom Post Type
function about_CPT() {

  $labels = array(
    'name'                  => _x( 'Nosotros', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Nosotros', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Nosotros', 'text_domain' ),
    'name_admin_bar'        => __( 'Nosotros', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
  $args = array(
    'label'                 => __( 'Nosotros', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-groups',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'about', $args );

}
add_action( 'init', 'about_CPT', 0 );

}





?>
