<?php get_header(); ?><section class="content-area" id="primary">
    <main class="site-main" id="main"><?php if (have_posts()) : ?><header class="page-header">
                <h1 class="page-title"><?php printf(__('Search Results for: %s', 'clarotm'), get_search_query()); ?></h1>
            </header><?php while (have_posts()) : the_post(); ?><?php get_template_part('content', 'search');
                                                            endwhile;
                                                            the_posts_pagination(array('prev_text' => __('Previous page', 'clarotm'), 'next_text' => __('Next page', 'clarotm'), 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'clarotm') . ' </span>',));
                                                        else : get_template_part('content', 'none');
                                                        endif; ?></main>
</section><?php get_footer(); ?>