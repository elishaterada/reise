<?php

    $featured_image = '';

    // Use featured image if it's a post
    if ( is_singular() ):
        $featured_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
    endif;

    // Fallback URL
    if ( !$featured_image ):
        $featured_image = 'https://unsplash.it/1024/682/?image=690';
    endif;

?>

<div id="hero" style="background-image: url('<?= $featured_image; ?>');">
    <div class="logo">
        <?= bloginfo( 'name' ); ?>
    </div>
    <div class="description">
        <?= bloginfo( 'description' ); ?>
    </div>
    <ul class="list-unstyled list-inline social">
        <li>
            <a href="#"><span class="fa fa-yelp"></span></a>
        </li>
        <li>
            <a href="#"><span class="fa fa-facebook"></span></a>
        </li>
        <li>
            <a href="#"><span class="fa fa-instagram"></span></a>
        </li>
    </ul>
</div>

<?php
