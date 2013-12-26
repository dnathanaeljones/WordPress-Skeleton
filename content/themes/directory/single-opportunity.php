<?php get_header(); ?>


<?php while(have_posts()) : the_post(); ?>

	<div class="content">

	               
	    <div class="clear">
	        <div class="opportunity">
	            <h3><?php the_title();?></h3>
	            <div class="org">
	                <div class="contact">
	                    
	                    <?php if(test_single_meta('contact', 'address')) : ?>    	
	                     	<p><?php echo single_meta('contact', 'address', true); ?></p>
	                    <?php endif; ?>
	                    

	                    <p>
	                    	<?php if(test_single_meta('contact', 'address')) : ?>    	
	                     		Tel:  <?php echo single_meta('contact', 'phone', false); ?>
	                    	<?php endif; ?>

	                    	<?php if(test_single_meta('contact', 'address')) : ?>    	
	                     		<a href="<?php single_meta('contact', 'url', false); ?>" target="_blank">
									<?php echo str_replace('http://', '',single_meta('contact', 'url', false)); ?>
	                     		</a>
	                    	<?php endif; ?>
	                       
	                    </p>
	                	
	                	<?php if(test_single_meta('fpc_contact', 'name')) : ?> 
							<h4>FPC Contact Person</h4>
		                    
		                    <p> 
		                    	<?php echo single_meta('fpc_contact', 'name', false); ?>
		                        <a href="mailto:<?php echo antispambot(single_meta('fpc_contact', 'email', false)); ?>">
									<?php echo antispambot(single_meta('fpc_contact', 'email', false)); ?>
		                        </a>
		                        <?php echo single_meta('fpc_contact', 'phone', false); ?>
		                    </p>
	                	<?php endif; ?>
	                </div>
	                
	                <div class="type">
	                	<?php echo the_terms( $post->ID, 'opportunity_type', '<h4>Opportunity Type</h4> ', '', ' ' ); ?>
	                </div>
	            </div>
	        </div>
	            
	        <div class="opportunity-descriptions">
	            
	            <div class="learn">

	                <h4>What is <?php the_title();?></h4>
	                <?php the_content(); ?>
	            </div>
	            
				<?php if(test_single_meta('i_desc', 'how-to-pray')) : ?> 
	            <div class="pray">
	                <h4>How to Pray for <?php the_title() ?></h4>
	                <?php echo single_meta('i_desc', 'how-to-pray', false); ?>
	            </div>
	        	<?php endif; ?>
	            
	            <?php if(test_single_meta('i_desc', 'how-to-partner')) : ?> 
	            <div class="get-involved">
	                <h4>How to get involved</h4>
	                <?php echo single_meta('i_desc', 'how-to-partner', false); ?>
	            </div>
	        	<?php endif; ?>

	        </div><!-- opportunity desc -->
	    </div><!-- clear -->

	</div>

<?php endwhile; ?>

<?php get_footer(); ?>





