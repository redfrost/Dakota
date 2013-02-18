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
  
  
<div id="master_wrap" class="whats-on">
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


	<!-- Main banner -->  
	<div class="page_banner span12">
		<?php	// Get First Post in Category. 
		global $post;
		$args = array( 'numberposts' => 1, 'offset'=> 0, 'category' => 1 );  //Post Number, Offset (Exclude post), Category number 
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :	setup_postdata($post); ?>
       		<div class="page_banner_imgbox">
       		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?></a>
       		</div>  			
 			<div class="page_banner_textbox">
 				<div class="page_banner_textbox_title">
 				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
 				<div class="page_banner_textbox_text"><p><?php the_excerpt(); ?></p></div>
 			</div>
		<?php endforeach; ?>
	</div><!-- /#page_banner -->




	  <!-- Main  -->
      <div id="main" class="<?php echo roots_main_class(); ?>" role="main">
       
   
   
    <h2>Latest News &amp; Event</h2>
	<?php	// Get Posts in Category except first. 
	global $post;
	$args = array( 'numberposts' => 6, 'offset'=> 1, 'category' => 1 );  //Post Number, Offset (Exclude post), Category number 
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :	setup_postdata($post); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    	
    	<header>
		<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail(array(150,150)); ?></a>
		</header>
		
		<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span class="updated">Date Posted: <?php the_time('j/m/y g:i A') ?></span>
		  	<p><?php the_excerpt(); ?></p>
		</div>
	</article>	
	<?php endforeach; ?>
   
   
       
   <!-- Page navigation -->
  	<div id="post-nav">
  	<a href="../category/news/"> » View all news</a>
  	</div>
       
       
       
    </div>
      
	  <!-- Sidebar -->      

      <aside id="sidebar" class="<?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php get_template_part('templates/sidebar'); ?>
      </aside>


    
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
