
    <h2>Latest News &amp; Event</h2>
	<?php	// Get Posts in Category except first. 
	global $post;
	$args = array( 'numberposts' => 6, 'offset'=> 0, 'category' => 10 );  //Post Number, Offset (Exclude post), Category number 
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
  	<a href="#"> » View all news</a>
  	</div>
       
