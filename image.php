<?php get_header(); ?><div class="content-area" id="primary">
    <main class="site-main" id="main"><?php while (have_posts()) : the_post(); ?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <nav class="image-navigation navigation" id="image-navigation">
                    <div class="nav-links">
                        <div class="nav-previous"><?php previous_image_link(false, __('Previous Image', 'clarotm')); ?></div>
                        <div class="nav-next"><?php next_image_link(false, __('Next Image', 'clarotm')); ?></div>
                    </div>
                </nav>
                <header class="entry-header"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></header>
                <div class="entry-content">
                    <div class="entry-attachment"><?php $image_size = apply_filters('clarotm_attachment_size', 'large');
                                                    echo wp_get_attachment_image(get_the_ID(), $image_size); ?><?php if (has_excerpt()) : ?><div class="entry-caption"><?php the_excerpt(); ?></div><?php endif; ?></div><?php the_content();
                                                                                                                                                                                                                                                                                        wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'clarotm') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>', 'pagelink' => '<span class="screen-reader-text">' . __('Page', 'clarotm') . ' </span>%', 'separator' => '<span class="screen-reader-text">, </span>',)); ?>
                </div>
                <footer class="entry-footer"><?php clarotm_entry_meta(); ?><?php edit_post_link(__('Edit', 'clarotm'), '<span class="edit-link">', '</span>'); ?></footer>
            </article><?php if (comments_open() || get_comments_number()) : comments_template();
                                            endif;
                                            the_post_navigation(array('prev_text' => _x('<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'clarotm'),));
                                        endwhile; ?></main>
</div><?php get_footer(); ?>