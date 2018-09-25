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




?>