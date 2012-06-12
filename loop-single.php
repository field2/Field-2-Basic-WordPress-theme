loop-single.php


<?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
		<?php the_title(); ?>
		<?php the_content(); ?>
		<ol>
<?php comments_template(); ?>
</ol>
		<?php endwhile; ?>
     <?php endif; ?>
