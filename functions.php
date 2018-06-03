<?php

   //Funzionie di setup, viene sempre richiamata all'attivazione del tema
   if ( !function_exists('theme_setup')) {
      function theme_setup() {

         //Comunica a Wordpress che c'è una navbar da registrare
         register_nav_menus(array(
            'header' => esc_html__('header', 'fullbase')
         ));
      }

      add_action('after_setup_theme', 'theme_setup');
   }

   //Importo i miei file css e le icone Fontawesome
   if ( !function_exists('import_style_scripts') ) {

      function import_style_scripts() {
         //var_dump(get_template_directory());die();
         wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css');
         wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
         wp_enqueue_style( 'fontawesome');
      }

      add_action('wp_enqueue_scripts', 'import_style_scripts');
   }


   function excerpt($limit) {
     $excerpt = explode(' ', get_the_excerpt(), $limit);
     if (count($excerpt)>=$limit) {
       array_pop($excerpt);
       $excerpt = implode(" ",$excerpt).'...';
     } else {
       $excerpt = implode(" ",$excerpt);
     }
     $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

     return $excerpt;
   }


   //Funzione per la registrazione di una sidebar, interna al footer
   register_sidebar( array(
      'name' => 'Left Footer Sidebar',
      'id' => 'footer-sidebar-left',
      'description' => 'Appears in the left-footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
   ) );

   register_sidebar( array(
      'name' => 'Center Footer Sidebar',
      'id' => 'footer-sidebar-center',
      'description' => 'Appears in the center-footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
   ) );

   register_sidebar( array(
      'name' => 'Right Footer Sidebar',
      'id' => 'footer-sidebar-right',
      'description' => 'Appears in the right-footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
   ) );

   // Main page sidebar
   register_sidebar(array(
      'name' => 'Sidebar',
      'id' => 'main-page-sidebar',
      'description' => 'Appears on the right of the main page area',
      'before_widget' => '<div id="%1$s" class="widget %2$s col-12">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="widget-title col-12">',
      'after_title' => '</h3>',
   ));


?>
