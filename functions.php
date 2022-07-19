<?php if (!isset($content_width)) {
	$content_width = 660;
}
if (version_compare($GLOBALS['wp_version'], '4.1-alpha', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}
if (!function_exists('clarotm_setup')) : function clarotm_setup()
	{
		load_theme_textdomain('clarotm');
		add_theme_support('automatic-feed-links');
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(825, 510, true);
		register_nav_menus(array('primary' => __('Primary Menu', 'clarotm'), 'social' => __('Social Links Menu', 'clarotm'),));
		add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'navigation-widgets',));
		add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat',));
		add_theme_support('custom-logo', array('height' => 248, 'width' => 248, 'flex-height' => true,));
		$color_scheme = clarotm_get_color_scheme();
		$default_color = trim($color_scheme[0], '#');
		add_theme_support('custom-background', apply_filters('clarotm_custom_background_args', array('default-color' => $default_color, 'default-attachment' => 'fixed',)));
		add_editor_style(array('css/editor-style.css', 'genericons/genericons.css', clarotm_fonts_url()));
		add_theme_support('editor-styles');
		add_theme_support('wp-block-styles');
		add_theme_support('responsive-embeds');
		add_theme_support('editor-color-palette', array(array('name' => __('Dark Gray', 'clarotm'), 'slug' => 'dark-gray', 'color' => '#111',), array('name' => __('Light Gray', 'clarotm'), 'slug' => 'light-gray', 'color' => '#f1f1f1',), array('name' => __('White', 'clarotm'), 'slug' => 'white', 'color' => '#fff',), array('name' => __('Yellow', 'clarotm'), 'slug' => 'yellow', 'color' => '#f4ca16',), array('name' => __('Dark Brown', 'clarotm'), 'slug' => 'dark-brown', 'color' => '#352712',), array('name' => __('Medium Pink', 'clarotm'), 'slug' => 'medium-pink', 'color' => '#e53b51',), array('name' => __('Light Pink', 'clarotm'), 'slug' => 'light-pink', 'color' => '#ffe5d1',), array('name' => __('Dark Purple', 'clarotm'), 'slug' => 'dark-purple', 'color' => '#2e2256',), array('name' => __('Purple', 'clarotm'), 'slug' => 'purple', 'color' => '#674970',), array('name' => __('Blue Gray', 'clarotm'), 'slug' => 'blue-gray', 'color' => '#22313f',), array('name' => __('Bright Blue', 'clarotm'), 'slug' => 'bright-blue', 'color' => '#55c3dc',), array('name' => __('Light Blue', 'clarotm'), 'slug' => 'light-blue', 'color' => '#e9f2f9',),));
		add_theme_support('editor-gradient-presets', array(array('name' => __('Dark Gray Gradient', 'clarotm'), 'slug' => 'dark-gray-gradient-gradient', 'gradient' => 'linear-gradient(90deg, rgba(17,17,17,1) 0%, rgba(42,42,42,1) 100%)',), array('name' => __('Light Gray Gradient', 'clarotm'), 'slug' => 'light-gray-gradient', 'gradient' => 'linear-gradient(90deg, rgba(241,241,241,1) 0%, rgba(215,215,215,1) 100%)',), array('name' => __('White Gradient', 'clarotm'), 'slug' => 'white-gradient', 'gradient' => 'linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(230,230,230,1) 100%)',), array('name' => __('Yellow Gradient', 'clarotm'), 'slug' => 'yellow-gradient', 'gradient' => 'linear-gradient(90deg, rgba(244,202,22,1) 0%, rgba(205,168,10,1) 100%)',), array('name' => __('Dark Brown Gradient', 'clarotm'), 'slug' => 'dark-brown-gradient', 'gradient' => 'linear-gradient(90deg, rgba(53,39,18,1) 0%, rgba(91,67,31,1) 100%)',), array('name' => __('Medium Pink Gradient', 'clarotm'), 'slug' => 'medium-pink-gradient', 'gradient' => 'linear-gradient(90deg, rgba(229,59,81,1) 0%, rgba(209,28,51,1) 100%)',), array('name' => __('Light Pink Gradient', 'clarotm'), 'slug' => 'light-pink-gradient', 'gradient' => 'linear-gradient(90deg, rgba(255,229,209,1) 0%, rgba(255,200,158,1) 100%)',), array('name' => __('Dark Purple Gradient', 'clarotm'), 'slug' => 'dark-purple-gradient', 'gradient' => 'linear-gradient(90deg, rgba(46,34,86,1) 0%, rgba(66,48,123,1) 100%)',), array('name' => __('Purple Gradient', 'clarotm'), 'slug' => 'purple-gradient', 'gradient' => 'linear-gradient(90deg, rgba(103,73,112,1) 0%, rgba(131,93,143,1) 100%)',), array('name' => __('Blue Gray Gradient', 'clarotm'), 'slug' => 'blue-gray-gradient', 'gradient' => 'linear-gradient(90deg, rgba(34,49,63,1) 0%, rgba(52,75,96,1) 100%)',), array('name' => __('Bright Blue Gradient', 'clarotm'), 'slug' => 'bright-blue-gradient', 'gradient' => 'linear-gradient(90deg, rgba(85,195,220,1) 0%, rgba(43,180,211,1) 100%)',), array('name' => __('Light Blue Gradient', 'clarotm'), 'slug' => 'light-blue-gradient', 'gradient' => 'linear-gradient(90deg, rgba(233,242,249,1) 0%, rgba(193,218,238,1) 100%)',),));
		add_theme_support('customize-selective-refresh-widgets');
	}
endif;
add_action('after_setup_theme', 'clarotm_setup');
function clarotm_widgets_init()
{
	register_sidebar(array('name' => __('Widget Area', 'clarotm'), 'id' => 'sidebar-1', 'description' => __('Add widgets here to appear in your sidebar.', 'clarotm'), 'before_widget' => '<aside id="%1$s" class="widget %2$s">', 'after_widget' => '</aside>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>',));
}
add_action('widgets_init', 'clarotm_widgets_init');
if (!function_exists('clarotm_fonts_url')) : function clarotm_fonts_url()
	{
		$fonts_url = '';
		$fonts = array();
		$subsets = 'latin,latin-ext';
		if ('off' !== _x('on', 'Noto Sans font: on or off', 'clarotm')) {
			$fonts[] = 'Noto Sans:400italic,700italic,400,700';
		}
		if ('off' !== _x('on', 'Noto Serif font: on or off', 'clarotm')) {
			$fonts[] = 'Noto Serif:400italic,700italic,400,700';
		}
		if ('off' !== _x('on', 'Inconsolata font: on or off', 'clarotm')) {
			$fonts[] = 'Inconsolata:400,700';
		}
		$subset = _x('no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'clarotm');
		if ('cyrillic' === $subset) {
			$subsets .= ',cyrillic,cyrillic-ext';
		} elseif ('greek' === $subset) {
			$subsets .= ',greek,greek-ext';
		} elseif ('devanagari' === $subset) {
			$subsets .= ',devanagari';
		} elseif ('vietnamese' === $subset) {
			$subsets .= ',vietnamese';
		}
		if ($fonts) {
			$fonts_url = add_query_arg(array('family' => urlencode(implode('|', $fonts)), 'subset' => urlencode($subsets), 'display' => urlencode('fallback'),), 'https://fonts.googleapis.com/css');
		}
		return $fonts_url;
	}
endif;
function clarotm_javascript_detection()
{
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action('wp_head', 'clarotm_javascript_detection', 0);
function clarotm_scripts()
{
	wp_enqueue_style('clarotm-fonts', clarotm_fonts_url(), array(), null);
	wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '20201208');
	wp_enqueue_style('clarotm-style', get_stylesheet_uri(), array(), '20201208');
	wp_enqueue_style('clarotm-block-style', get_template_directory_uri() . '/css/blocks.css', array('clarotm-style'), '20220524');
	wp_enqueue_style('clarotm-ie', get_template_directory_uri() . '/css/ie.css', array('clarotm-style'), '20170916');
	wp_style_add_data('clarotm-ie', 'conditional', 'lt IE 9');
	wp_enqueue_style('clarotm-ie7', get_template_directory_uri() . '/css/ie7.css', array('clarotm-style'), '20141210');
	wp_style_add_data('clarotm-ie7', 'conditional', 'lt IE 8');
	wp_enqueue_script('clarotm-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141028', true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	if (is_singular() && wp_attachment_is_image()) {
		wp_enqueue_script('clarotm-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20141210');
	}
	wp_enqueue_script('clarotm-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '20220524', true);
	wp_localize_script('clarotm-script', 'screenReaderText', array('expand' => '<span class="screen-reader-text">' . __('expand child menu', 'clarotm') . '</span>', 'collapse' => '<span class="screen-reader-text">' . __('collapse child menu', 'clarotm') . '</span>',));
}
add_action('wp_enqueue_scripts', 'clarotm_scripts');
function clarotm_block_editor_styles()
{
	wp_enqueue_style('clarotm-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20201208');
	wp_enqueue_style('clarotm-fonts', clarotm_fonts_url(), array(), null);
}
add_action('enqueue_block_editor_assets', 'clarotm_block_editor_styles');
function clarotm_resource_hints($urls, $relation_type)
{
	if (wp_style_is('clarotm-fonts', 'queue') && 'preconnect' === $relation_type) {
		if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '>=')) {
			$urls[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin',);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}
	return $urls;
}
add_filter('wp_resource_hints', 'clarotm_resource_hints', 10, 2);
function clarotm_post_nav_background()
{
	if (!is_single()) {
		return;
	}
	$previous = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
	$next = get_adjacent_post(false, '', false);
	$css = '';
	if (is_attachment() && 'attachment' === $previous->post_type) {
		return;
	}
	if ($previous && has_post_thumbnail($previous->ID)) {
		$prevthumb = wp_get_attachment_image_src(get_post_thumbnail_id($previous->ID), 'post-thumbnail');
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url($prevthumb[0]) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}
	if ($next && has_post_thumbnail($next->ID)) {
		$nextthumb = wp_get_attachment_image_src(get_post_thumbnail_id($next->ID), 'post-thumbnail');
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url($nextthumb[0]) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}
	wp_add_inline_style('clarotm-style', $css);
}
add_action('wp_enqueue_scripts', 'clarotm_post_nav_background');
function clarotm_nav_description($item_output, $item, $depth, $args)
{
	if ('primary' === $args->theme_location && $item->description) {
		$item_output = str_replace($args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output);
	}
	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'clarotm_nav_description', 10, 4);
function clarotm_search_form_modify($html)
{
	return str_replace('class="search-submit"', 'class="search-submit screen-reader-text"', $html);
}
add_filter('get_search_form', 'clarotm_search_form_modify');
function clarotm_widget_tag_cloud_args($args)
{
	$args['largest'] = 22;
	$args['smallest'] = 8;
	$args['unit'] = 'pt';
	$args['format'] = 'list';
	return $args;
}
add_filter('widget_tag_cloud_args', 'clarotm_widget_tag_cloud_args');
function clarotm_author_bio_template($template)
{
	if (is_author()) {
		$author = get_queried_object();
		if ($author instanceof WP_User && 'bio' === $author->user_nicename) {
			return locate_template(array("author-{$author->ID}.php", 'author.php'));
		}
	}
	return $template;
}
add_filter('author_template', 'clarotm_author_bio_template');
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/block-patterns.php';
