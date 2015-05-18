<?php

    $featured_image = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <p><a href="<?php the_permalink(); ?>"><img src="<?= $featured_image; ?>" class="img-responsive" alt="Featured Image"></a></p>
    <?php the_excerpt(); ?>
  </div>
</article>
