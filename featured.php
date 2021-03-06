<?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );?>

    <!-- hero starts here -->
    <article id="hero-article">
        <div class="hero" style="background-image:url('<?php echo $thumbnail_src[0]; ?>')">
            <div class="hero-overlay">
                <div class="hero-wrapper">
                    <div class="article-info">
                        <p class="topic"><?php echo the_category(', '); ?></p>
                        <h1 class="hero-title <?php echo $post->ID; ?>"><?php the_title(); ?></h1>
                        <a class="read-more" href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!-- Hero end here --> 
