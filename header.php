<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
   <head>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/css?family=Lora|Playfair+Display|Ubuntu" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="<?php bloginfo('description'); ?>">
      <title></title>
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>

      <div class="wrapper-heder" style="background:url(<?php echo get_bloginfo('template_url') ?>/images/texture1.jpg); background-size:cover;">
            <!-- <img src="<?php  ?>/images/texture1.jpg"/> -->

      <header class="container px-0">
         <div class="custom-row">

            <h1 class="blog-title col-12 pl-md-4">
               <!-- Inseriso link alla home e titolo blog -->
               <a href="<?php bloginfo('url'); ?>">
                  <?php bloginfo('name'); ?>
               </a>
            </h1>

            <div class="nav-items-cnt d-none d-md-flex col-12 flex-row-reverse p-0">
               <!-- La funzionalità della navbar è stata associata in questo punto -->
               <?php wp_nav_menu(array(
                  'theme_location' => 'header',
                  'depth' => 2,
                  'container' => true,
                  'menu_class' => 'nav-item'
               ));
               ?>
            </div>

            <div class="hamburger-icon col-12 d-flex justify-content-center align-items-center d-md-none">
               <i class="fas fa-3x fa-bars"></i>
            </div>
         </div>
      </header>

      </div>
