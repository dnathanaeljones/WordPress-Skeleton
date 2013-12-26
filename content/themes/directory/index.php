<?php get_header(); ?>


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

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	    
                 
		<?php endwhile; else : ?>

	
		<?php endif; ?>
	
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