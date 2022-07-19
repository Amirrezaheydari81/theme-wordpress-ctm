<?php

?>
<!--
   ┌─────────────────────────────────────────────────────────────────────────┐
┌──┤  Hi, I'm glad you are a curiosity programmer, I hope you are successful.├──┐
│  └─────────────────────────────────────────────────────────────────────────┘  │
│                                                                               │
│                                                                               │
│                                                                               │
│                                                                               │
│                        ┌─────────────────────────────┐                        │
└────────────────────────┤       Amirreza Heydari      ├────────────────────────┘
                         └─────────────────────────────┘
-->
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta content="width=device-width" name="viewport">
    <link href="https://gmpg.org/xfn/11" rel="profile">
    <link href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" rel="pingback">
    <!--[if lt IE 9]><script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js?ver=3.7.0"></script><![endif]--><?php wp_head(); ?>
</head>
<body<?php body_class(); ?>><?php wp_body_open(); ?><div class="hfeed site" id="page"><a href="#content" class="screen-reader-text skip-link"><?php _e('Skip to content', 'clarotm'); ?></a>
        <div class="sidebar" id="sidebar">
            <header class="site-header" id="masthead">
                <div class="site-branding"><?php clarotm_the_custom_logo();
                                            if (is_front_page() && is_home()) : ?><h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1><?php else : ?><p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p><?php endif;
                                                                                                                                                                                                                                                                                                                                        $description = get_bloginfo('description', 'display');
                                                                                                                                                                                                                                                                                                                                        if ($description || is_customize_preview()) : ?><p class="site-description"><?php echo $description; ?></p><?php endif; ?><button class="secondary-toggle"><?php _e('Menu and widgets', 'clarotm'); ?></button></div>
            </header><?php get_sidebar(); ?>
        </div>
        <div class="site-content" id="content">