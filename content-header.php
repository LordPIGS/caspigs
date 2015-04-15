<header id="masthead" role="banner" class="site-head site-header" <?php if(get_header_image() ) : ?>style="background-image: url(<?php esc_url(header_image()); ?>);"<?php endif ?>>

    <div class="vertical-row">
        <div class="vertical">
            <h1 class="blog-title"><?php the_title(); ?></h1>
        </div>
    </div>
</header><!-- #masthead -->