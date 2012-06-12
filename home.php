home.php


<?php get_header(); ?>

<?php wp_cycle(); ?>

<aside>
<h2>Home page aside</h2>
<?php query_posts( $args );?>
<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>    
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php the_content(); ?>
		
		<?php endwhile; ?>
     <?php endif; ?>
<?php wp_reset_query(); ?>
</aside>
<aside>
<?php get_template_part( 'loop' ); ?>
</aside>
<aside>
<?php get_template_part( 'loop' ); ?>
</aside>


<?php get_footer(); ?>