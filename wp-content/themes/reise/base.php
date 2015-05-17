<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php
      get_template_part('templates/hero');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main col-md-10 col-md-offset-1" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>

    <script>
      //non-blocking CSS loader
      //Use loadCSS function to load them with js, also use a noscript tag below to support browsers with js off.

      /*!
      loadCSS: load a CSS file asynchronously.
      [c]2014 @scottjehl, Filament Group, Inc.
      Licensed MIT
      */
      function loadCSS(e,n,o,t){"use strict";var d=window.document.createElement("link"),i=n||window.document.getElementsByTagName("script")[0],s=window.document.styleSheets;return d.rel="stylesheet",d.href=e,d.media="only x",t&&(d.onload=t),i.parentNode.insertBefore(d,i),d.onloadcssdefined=function(n){for(var o,t=0;t<s.length;t++)s[t].href&&s[t].href.indexOf(e)>-1&&(o=!0);o?n():setTimeout(function(){d.onloadcssdefined(n)})},d.onloadcssdefined(function(){d.media=o||"all"}),d}

      loadCSS('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    </script>

  </body>
</html>
