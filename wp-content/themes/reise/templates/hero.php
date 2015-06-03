<?php

    $featured_image = '';
    $featured_video = '';
    $featured_video_enabled = '';

    if ( is_singular() ):

        // get video settings
        $featured_video_enabled = get_field('featured_video_enable');
        if ( $featured_video_enabled ) :
            $featured_video = [
                'webm'   => get_field('featured_video_webm'),
                'mp4'    => get_field('featured_video_mp4'),
                'ogv'    => get_field('featured_video_ogv'),
                'poster' => get_field('featured_video_poster')
            ];
            $featured_image = $featured_video['poster'];
        else:
            // get featured image
            $featured_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
        endif;

    endif;

?>

<div id="hero" style="background-image: url('<?= $featured_image; ?>');">

    <?php if ( $featured_video_enabled  ) : ?>
    <video id="featured-video" class="video-player" autoplay="true" loop="true" poster="<?= $featured_video['poster']; ?>">
        <source type="video/webm" src="<?= $featured_video['webm']; ?>">
        <source type="video/mp4" src="<?= $featured_video['mp4']; ?>">
        <source type="video/ogg" src="<?= $featured_video['ogv']; ?>">
    </video>
    <?php endif; ?>

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
