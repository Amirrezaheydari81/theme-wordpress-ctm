<?php get_header(); ?><section class="content-area"id="primary"><main class="site-main"id="main"><?php if(have_posts()): ?><header class="page-header"><?php the_archive_title('<h1 class="page-title">','</h1>');the_archive_description('<div class="taxonomy-description">','</div>'); ?></header><?php while(have_posts()):the_post();get_template_part('content',get_post_format());endwhile;the_posts_pagination(array('prev_text'=>__('Previous page','clarotm'),'next_text'=>__('Next page','clarotm'),'before_page_number'=>'<span class="meta-nav screen-reader-text">'.__('Page','clarotm').' </span>',));else:get_template_part('content','none');endif; ?></main></section><?php get_footer(); ?>