<?php if( is_singular() ): ?>

<div id="hero" style="background-image: url('https://unsplash.it/1600/1067/?random');">
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
