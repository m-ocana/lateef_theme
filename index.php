<?php get_header(); ?>

<!-- Get last post as featured -->
<?php 
    $my_query = new WP_Query( 'posts_per_page=1' );
    while ( $my_query->have_posts() ) : $my_query->the_post();
        $do_not_duplicate = $post->ID;
        get_template_part( 'featured' );
    endwhile;
?>

<!-- Get other Posts -->

<?php if ( have_posts() ) : ?>

    <div class="main-container">
        <div class="articles">

            <?php
                while ( have_posts() ) : the_post();
                    if ( $post->ID == $do_not_duplicate ) continue; 
                    get_template_part( 'content' );
                endwhile;
            ?>

        </div>
    </div>

<?php endif ?>



<?php get_footer(); ?>
