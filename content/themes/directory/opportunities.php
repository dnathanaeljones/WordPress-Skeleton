
<?php 
/*
Template Name: Opportunities
*/

$terms = get_terms('opportunity_type'); 

get_header(); ?>

<div class="content categories">

<?php foreach( $terms as $term ) : ?>

 <h3><?php echo $term->name; ?></h3>   

 <?php  

 		$posts = new WP_Query( "taxonomy=opportunity_type&term=$term->slug" );

        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post(); 
?>
        
        <a href="<?php the_permalink(); ?>">
        	<?php the_title(); ?>
        </a>

<?php        
        endwhile; endif;

    endforeach; 
?>

</div>

<?php get_footer(); ?>