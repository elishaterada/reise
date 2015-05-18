<?php

if( is_singular() ):

    $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    if ( !$featured_image ):
        // Fallback URL
        $featured_image = '';
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

<?php endif;
