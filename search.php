search.php

<?php get_header(); ?>

<?php get_sidebar(); ?>


<?php
global $wp_query;
$total_results = $wp_query->found_posts;
echo $total_results;
?>     


<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>    
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		<?php endwhile; ?>
     <?php endif; ?>





<?php get_footer(); ?>