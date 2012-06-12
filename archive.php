archive.php


<?php get_header(); ?>

<?php get_sidebar(); ?>


<?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		<ol class="commentlist">
<?php wp_list_comments(); ?>
</ol>
		<?php endwhile; ?>
     <?php endif; ?>
     

<?php get_footer(); ?>