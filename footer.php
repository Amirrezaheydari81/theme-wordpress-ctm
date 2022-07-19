<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 
 */
?>
</div>
<!--.site-content-->
<footer id="colophon" class="site-footer">
    <div class="site-info"><?php
                            do_action('clarotm_credits'); ?><?php
                                                            if (function_exists('the_privacy_policy_link')) {
                                                                the_privacy_policy_link('', '<span role="separator" aria-hidden="true"></span>');
                                                            } ?><a href="<?php echo esc_url(__('https://wordpress.org/', 'clarotm')); ?>" class="imprint"><?php
                                                                                                                                        printf(__('Proudly powered by %s', 'clarotm'), 'WordPress'); ?></a></div>
    <!--.site-info-->
</footer>
<!--.site-footer-->
</div>
<!--.site--><?php wp_footer(); ?></body>
<!--
Web Design BY :
┌────────────────────┐
│      CLAROTM       │
│  ───────────────   │
│     Contact Me     │
│                    │
│    0998 1040 774   │
│                    │
│    0939 5574 353   │
│   ───────────────  │
│     iseokar.ir     │
│                    │
│     ClaroTM.ir     │
│                    │
└────────────────────┘
-->

</html>