<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>
    


<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand img" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url'); ?>/img/i1.PNG" alt=""></a>
        <?php
       wp_nav_menu( array(
        'theme_location'  => 'primary',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ) );
    
        ?>
    </div>
</nav>

<section id="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="promo-titile">BEST DIGITAL AGENCY</p>
                <P>Subscribe Easy Tutorial YouTube channel to watch more videos on website development,Digital Marketing, Wordpress and graphic designing</P>
                <a href="#"><img src=" <?php bloginfo('template_url'); ?>/img/play.png"alt=""  class="play-btn">Watch tutorials</a>
            </div>
            <div class="col-md-6">
           
                <img src="<?php bloginfo('template_url'); ?>/img/home2.png" alt="service"  class="img-fluid">
            </div>
        </div>
    </div>
    <img src="<?php bloginfo('template_url'); ?>/img/wave1.png" alt="bottom-img">
</section>

