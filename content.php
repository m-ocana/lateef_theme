<article>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <h1><?php the_title(); ?></h1>
        
        <?php if ( has_post_thumbnail() ) : 
                the_post_thumbnail();
        	endif; ?>
    </a>
    <p><span class="tag"><?php get_the_category() ?></span> | <?php the_date(); ?></p>
</article>