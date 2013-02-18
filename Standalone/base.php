<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy=""><!-- Scroll Spy disabled -->

  <?php
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  
<div id="master_wrap">
  <div id="wrap" class="container" role="document">
  
    <!-- Breadcrumb -->
  <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>
  

<!-- Content -->  
    <div id="content" class="row">

	  <!-- Main  -->
      <div id="main" class="<?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div>
      
	  <!-- Sidebar -->      
      <?php if (roots_display_sidebar()) : ?>
      <aside id="sidebar" class="<?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php get_template_part('templates/sidebar'); ?>
      </aside>
      <?php endif; ?>
    
    </div><!-- /#content -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>
</div><!-- /#master_wrap -->

<!-- iOS touch dropdown menu quickfix. Delete this later. -->
<script type='text/javascript'>
$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
</script>

</body>



</html>
