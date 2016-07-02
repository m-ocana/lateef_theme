<?php $thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );?>

    <!-- hero starts here --> 
    <div class="hero" style="background-image:url('<?php echo $thumbnail_src[0]; ?>')">
        <div class="hero-overlay">
            <div class="hero-wrapper">
                <h1 class="hero-title <?php echo $post->ID; ?>"><?php the_title(); ?></h1>
                <a class="read-more" href="">Read more</a>
            </div>
        </div>
    </div>
    <!-- Hero end here --> 
