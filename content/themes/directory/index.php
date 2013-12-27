<?php get_header(); 

$purpose_page_query = new WP_Query('pagename=purpose');
$featured_query 	= new WP_Query(
							array('post_type' 	=> 'opportunity')
						);
 
	 
?>


	<div class="content whole-page home">
		<div class="home-top">
			<img id="grow" src="<?php show_img('growth'); ?>" />
			<img id="grow-small" src="<?php show_img('grow_small'); ?>" />
			<div id="words">
				<h2 class="learn">Learn</h2>
				<h2 class="serve">Serve</h2>
				<h2 class="grow">Grow</h2>	
			</div>
		</div>
		
		<div class="home-mid">
			<?php while ( $purpose_page_query->have_posts() ) { 
				$purpose_page_query->the_post();
				echo get_the_content(); 		    
	                 
			 }; ?>
			 <a href="<?php get_bloginfo('url'); ?>purpose" class="more">More</a>
		</div>

		<div class="home-mid">
			<?php while ( $featured_query->have_posts() ) { 
				$featured_query->the_post(); 
				$title = get_the_title(); 
				$excerpt = get_the_excerpt(); 
				$id = get_the_id(); 
				
				if (single_meta('i_desc', 'feature-month', false) !== Date('F')) {
					break;
				}
				?>
				
				<h3>
				Featured: <span><?php echo $title.partner_type_display($id); ?></span>
				</h3>		    
				<?php echo $excerpt; ?>
				<a href="<?php the_permalink(); ?>" class="more">More</a>
	               
			<?php }; ?>
		</div>
	</div>	

<?php get_footer(); ?>


<!-- 

Opportunity: 
WCK - Custom Fields and Custom Post Types Creator 1.0.7

  Title
  Content

  Address (string)
  Telephone (string)
  URL (string)

  FPC Contact Name
  FPC Contact email
  FPC Contact phone


  Featured Start Month (dropdown of months)
  Featured End Month (dropdown of months)

  [content = description]
  How to Pray (text)
  Join (text)


 -->