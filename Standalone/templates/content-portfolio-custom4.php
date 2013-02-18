<div id="portfolio_custom">


	<div id="portfolio_page_title">
	<h1>LATEST WORKS</h1>
		<ul id="myTab" class="portfolio_menu">
			<li class="active"><a href="#portfolio0" data-toggle="tab"><em class="icon-sitemap"></em>ALL</a></li>
			<li><a href="#portfolio1" data-toggle="tab"><em class=" icon-bolt"></em>WEBSITE</a></li>
			<li><a href="#portfolio2" data-toggle="tab"><em class="icon-leaf"></em>GRAPHIC DESIGN</a></li>
			<li><a href="#portfolio3" data-toggle="tab"><em class="icon-camera-retro"></em>PHOTOGRAPHY</a></li>
			<li><a href="#portfolio4" data-toggle="tab"><em class="icon-film"></em>MEDIA</a></li>
		</ul>
	</div><!-- /#portfolio_page_title -->




          

<div id="myTabContent" class="tab-content">

	<section id="portfolio0" class="tab-pane fade active in">
	
		<div class="row">    

			<div class="span12 banner">
						<div id="myCarousel-auto" class="carousel slide page_banner_imgbox">
						 <div class="carousel-inner">
						 
						  <?php 
						   $the_query = new WP_Query(array(
						    'post_type' => 'portfolio',
						    'posts_per_page' => 1 
						    )); 
						   while ( $the_query->have_posts() ) : 
						   $the_query->the_post();
						  ?>
						  
						   <div class="item active">
						    
						    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?></a>
						    <div class="carousel-caption page_banner_textbox">
							    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							    <p><?php the_excerpt();?></p>
							    <a class="link_view btn btn-large btn-primary" href="<?php the_permalink(); ?>">VIEW</a>
						    </div>			
						    			    
						   </div><!-- item active -->

						   
						  <?php 
						   endwhile; 
						   wp_reset_postdata();
						  ?>
						  <?php 
						   $the_query = new WP_Query(array(
						    'post_type' => 'portfolio', 
						    'posts_per_page' => 4, 
						    'offset' => 1 
						    )); 
						   while ( $the_query->have_posts() ) : 
						   $the_query->the_post();
						  ?>
						  
						   <div class="item">
						   
						    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?></a>
						    <div class="carousel-caption page_banner_textbox">
							    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							    <p><?php the_excerpt();?></p>
							    <a class="link_view btn btn-large btn-primary" href="<?php the_permalink(); ?>">VIEW</a>
						    </div>			
						    			    
						   </div><!-- item -->
						   
						  <?php 
						   endwhile; 
						   wp_reset_postdata();
						  ?>
						  
						 </div><!-- carousel-inner -->
						 <a class="left carousel-control" href="#myCarousel-auto" data-slide="prev">‹</a>
						 <a class="right carousel-control" href="#myCarousel-auto" data-slide="next">›</a>
						</div><!-- #myCarousel -->
			
			</div><!-- /.span12 -->
			

		</div><!-- /row -->


		<p>&nbsp;</p>


		<div class="row">    
			<?php	// Get All Custom Post type 
			global $post;
			$args = array( 'post_type' => 'portfolio', 'offset'=> 5, 'posts_per_page' => 8 );  //Offset = Exclude post)
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
		
			<div class="span3">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    	
			<header>
			<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
			<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
			</header>
						
			<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
			<p><?php the_excerpt(); ?></p>
			<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
			</div><!-- /.entry-content listbox -->

		</article>	
			</div><!-- /.span3 -->
			
			<?php endforeach; ?> 
		</div><!-- /row -->


	</section><!-- /section0 -->
	
	
	
	<section id="portfolio1" class="tab-pane fade">

		<div class="row">    
			<?php	// Get Posts from Custom Category (taxonomy)
				$args = array(
		        'posts_per_page' => 24,
		        'post_type' => 'portfolio',
		        'tax_query' => array(
		            array(
		                'taxonomy' => 'portfolio_category',
		                'field' => 'slug',
		                'terms' => array( 
		                    'website' 
		                )
		            )
		        )       
		    );			
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); 
			?>
		
			<div class="span3">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    	
			<header>
			<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
			<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
			</header>
						
			<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
			<p><?php the_excerpt(); ?></p>
			<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
			</div><!-- /.entry-content listbox -->

		</article>	
			</div><!-- /.span3 -->
			
			<?php endforeach; ?> 
		</div><!-- /row -->
    
	</section><!-- /section1 -->
	
	
	
	<section id="portfolio2" class="tab-pane fade">

		<div class="row">    
					<?php	// Get Posts from Custom Category (taxonomy)
						$args = array(
				        'posts_per_page' => 24,
				        'post_type' => 'portfolio',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'portfolio_category',
				                'field' => 'slug',
				                'terms' => array( 
				                    'design' 
				                )
				            )
				        )       
				    );			
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
					?>
				
					<div class="span3">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    	
			<header>
			<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
			<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
			</header>
						
			<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
			<p><?php the_excerpt(); ?></p>
			<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
			</div><!-- /.entry-content listbox -->

		</article>	
					</div><!-- /.span3 -->
					
					<?php endforeach; ?> 
				</div><!-- /row -->

	</section><!-- /section2 -->
	
	
	
	<section id="portfolio3" class="tab-pane fade">

		<div class="row">    
					<?php	// Get Posts from Custom Category (taxonomy)
						$args = array(
				        'posts_per_page' => 24,
				        'post_type' => 'portfolio',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'portfolio_category',
				                'field' => 'slug',
				                'terms' => array( 
				                    'photography' 
				                )
				            )
				        )       
				    );			
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
					?>
				
					<div class="span3">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    	
			<header>
			<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
			<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
			</header>
						
			<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
			<p><?php the_excerpt(); ?></p>
			<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
			</div><!-- /.entry-content listbox -->

		</article>	
					</div><!-- /.span3 -->
					
					<?php endforeach; ?> 
				</div><!-- /row -->

	</section><!-- /section3 -->



	<section id="portfolio4" class="tab-pane fade">

		<div class="row">    
					<?php	// Get Posts from Custom Category (taxonomy)
						$args = array(
				        'posts_per_page' => 24,
				        'post_type' => 'portfolio',
				        'tax_query' => array(
				            array(
				                'taxonomy' => 'portfolio_category',
				                'field' => 'slug',
				                'terms' => array( 
				                    'media' 
				                )
				            )
				        )       
				    );			
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
					?>
				
					<div class="span3">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					    	
			<header>
			<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail('list_thumbnail'); ?></a>		
			<span class="updated"><?php the_terms( $post->ID, 'portfolio_category', 'Category: ', ', ', ' ' ); ?></span>		
			</header>
						
			<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
			<p><?php the_excerpt(); ?></p>
			<a class="link_view" href="<?php the_permalink(); ?>">VIEW</a>
			</div><!-- /.entry-content listbox -->

		</article>	
					</div><!-- /.span3 -->
					
					<?php endforeach; ?> 
				</div><!-- /row -->

	</section><!-- /section4 -->

</div><!-- /#myTabContent -->



<!--
<?php
//Custom taxonomy List

$taxonomy     = 'portfolio_category';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '';
$empty        = 0;

$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title,
  'hide_empty'   => $empty
);
?>
<ul>
<?php wp_list_categories( $args ); ?>
</ul>
-->

</div>