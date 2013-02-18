<header id="banner" class="header-standard" role="banner">

  <div class="container">



    <h1 class="site-title"><a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>

    <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>

    

       

    <nav id="nav-main" class="nav-hover-box" role="navigation">

      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills nav-hover'));
        endif;
      ?>

      <?php get_search_form(); ?>

    </nav>

    

  </div>

</header>

