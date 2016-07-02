<?php get_header(); ?> 

    <!-- Main container starts here --> 
    <div class="main-container">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <div class="articles">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                ?>

            <?php endwhile; ?>
            </div> <!-- Articles end here -->

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

    </div>
    <!-- Main container ends here -->

<?php get_footer(); ?>
