<?php

/**
 * فایل قالب اصلی
 *
 * این عمومی ترین فایل قالب در قالب وردپرس است
 * و یکی از دو فایل مورد نیاز برای یک موضوع (دیگری style.css است).
 * برای نمایش صفحه ای استفاده می شود که هیچ چیز خاص تری با یک پرس و جو مطابقت ندارد.
 * به عنوان مثال، هنگامی که هیچ فایل home.php وجود ندارد، صفحه اصلی را جمع می کند.
 *
 * Learn more: {@link https://clarotm.ir}
 *
 */ get_header(); ?><div class="content-area" id="primary">
    <main class="site-main" id="main"><?php if (have_posts()) : ?><?php if (is_home() && !is_front_page()) : ?><header>
            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
        </header><?php endif; ?><?php while (have_posts()) : the_post();
                                                get_template_part('content', get_post_format());
                                            endwhile;
                                            the_posts_pagination(array('prev_text' => __('Previous page', 'clarotm'), 'next_text' => __('Next page', 'clarotm'), 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'clarotm') . ' </span>',));
                                        else : get_template_part('content', 'none');
                                        endif; ?></main>
</div><?php get_footer(); ?>