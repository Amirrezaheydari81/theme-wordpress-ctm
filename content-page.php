<?php  ?><article id="post-<?php the_ID(); ?>"<?php post_class(); ?>><?php clarotm_post_thumbnail(); ?><header class="entry-header"><?php the_title('<h1 class="entry-title">','</h1>'); ?></header><div class="entry-content"><?php the_content(); ?><?php wp_link_pages(array('before'=>'<div class="page-links"><span class="page-links-title">'.__('Pages:','clarotm').'</span>','after'=>'</div>','link_before'=>'<span>','link_after'=>'</span>','pagelink'=>'<span class="screen-reader-text">'.__('Page','clarotm').' </span>%','separator'=>'<span class="screen-reader-text">, </span>',)); ?></div><?php edit_post_link(__('Edit','clarotm'),'<footer class="entry-footer"><span class="edit-link">','</span></footer><!-- .entry-footer -->'); ?></article>