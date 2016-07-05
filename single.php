<?php get_header(); ?> 

    <?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );?>
    <!-- hero starts here -->
    <article id="hero-article">
        <div class="hero" style="background-image:url('<?php echo $thumbnail_src[0]; ?>')">
            <div class="hero-overlay">
                <div class="hero-wrapper">
                    <div class="article-info">
                        <p class="topic"><?php echo the_category(', '); ?></p>
                        <h1 class="hero-title <?php echo $post->ID; ?>"><?php the_title(); ?></h1>
                        <p class="meta"><?php echo get_the_time(get_option('date_format'), $post->ID); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- Hero end here --> 

    <!-- Main container starts here --> 
    <div class="main-container">
        <div class="article-post">

            <?php echo apply_filters ("the_content", $post->post_content) ?>

        </div>

        <?php comments_template(); ?>

    </div>
    <!-- Main container ends here -->

<?php get_footer(); ?>