<?php if($comments) : ?>  
    <ol>  
    <?php foreach($comments as $comment) : ?>  
        <li id="comment-<?php comment_ID(); ?>">  
            <?php if ($comment->comment_approved == '0') : ?>  
                <p>Your comment is awaiting approval</p>  
            <?php endif; ?>  
            <?php comment_text(); ?>  
            <cite><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></cite>  
        </li>  
    <?php endforeach; ?>  
    </ol>  
<?php else : ?>  
    <p>No comments yet</p>  
<?php endif; ?>  
<?php comment_form(); ?>
