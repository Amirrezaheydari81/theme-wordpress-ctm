<?php get_header(); ?><div class="content-area" id="primary">
    <main class="site-main" id="main"><?php while (have_posts()) : the_post();
                                            get_template_part('content', get_post_format());
                                            if (comments_open() || get_comments_number()) : comments_template();
                                            endif;
                                            the_post_navigation(array('next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'clarotm') . '</span> ' . '<span class="screen-reader-text">' . __('Next post:', 'clarotm') . '</span> ' . '<span class="post-title">%title</span>', 'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'clarotm') . '</span> ' . '<span class="screen-reader-text">' . __('Previous post:', 'clarotm') . '</span> ' . '<span class="post-title">%title</span>',));
                                        endwhile; ?></main>
</div><?php get_footer(); ?>