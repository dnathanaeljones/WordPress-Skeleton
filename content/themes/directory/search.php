<?php get_header(); ?>

<div class="content search">

    <!-- common wrapper if any -->
    <?php if (have_posts()) : ?>
      <p>Showing results for <strong><?php the_search_query() ?></strong></p>
        <!-- Entries title and wrapper -->
        <?php while (have_posts()) : the_post(); ?>
          
          <div class="org">
            <h3><?php the_title();?><i class="icon-resize-small"></i></h3>
            <p class="tags">
              <?php echo the_terms( $post->ID, 'opportunity_type', '', ' | ', ' ' ); ?>
            </p>
            <p>
               <?php the_content(); ?>
               <a class="more" href="<?php the_hyperlink(); ?>">Learn More</a>
            </p>
          </div>
        <?php endwhile; ?>    
      
      <!-- end entries -->
    <?php else : ?>
	    
        <!-- No posts found title and msg -->
	    <p>Sorry, no opportunities could be found for <strong><?php the_search_query() ?></strong>.</p>
	    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
    <!-- end common wrapper if any -->
	
</div>
<?php get_footer(); ?>

