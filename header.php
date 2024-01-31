<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/easy-icon.png">
    <!-- Bootstrap CSS -->
    <!--Custom Style-->
    <?php wp_head(); ?>
    
  </head>
  
  <body>
    <header id="siteHeader" class="header text-center">
      <!--Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <!--Logo-->
        <a class="siteLogo" href="<?php echo home_url(); ?>" >
        <?php if ( function_exists( 'the_custom_logo' ) ){
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        } 
        ?>
          <img class="imageLogo" src="<?php echo $logo[0]; ?>" >
          <h1 class="siteTitle"><?php echo get_bloginfo( 'name' ); ?></h1>
        </a>
            <!--End of Logo-->

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          
          <span class="navbar-toggler-icon"></span>
          </button>

          <!--wp header menu-->
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary-menu',
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse',
              'container_id' => 'navbarNav',
              'menu' => 'primary-menu',
              'menu_class' => 'navbar-nav',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="nav-item">
              <a class="nav-link active" aria-current="page" href="%4$s">Home</a></li></ul>',
              'fallback_cb' => 'wp_page_menu',
                )
              );
        ?>
        

          </div>
        </div>
      </nav>
      <!--End of Navigation-->
      <!--Site Main Title-->
      <h2 class="pageTitle"><?php the_title(); ?></h2>
    </header>