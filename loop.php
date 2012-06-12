loop.php

<?php if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>    
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php the_content(); ?>
		<ol>
 <?php comments_number( 'no responses', 'one response', '% responses' ); ?>
 </ol>
		<?php endwhile; ?>
     <?php endif; ?>
