<?php
/**
 * firbo-news functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package firbo-news
 */



if (!function_exists('firbo_news_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function firbo_news_setup() {
		/*
			 * Make theme available for translation.
			 * Translations can be filed in the /languages/ directory.
			 * If you're building a theme based on firbo-news, use a find and replace
			 * to change 'firbo-news' to the name of your theme in all the template files.
		*/
		load_theme_textdomain('firbo-news', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
			 * Let WordPress manage the document title.
			 * By adding theme support, we declare that this theme does not use a
			 * hard-coded <title> tag in the document head, and expect WordPress to
			 * provide it for us.
		*/
		add_theme_support('title-tag');

		/*
			 * Enable support for Post Thumbnails on posts and pages.
			 *
			 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'firbo-news'),
		));

		/*
			 * Switch default core markup for search form, comment form, and comments
			 * to output valid HTML5.
		*/
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('firbo_news_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'firbo_news_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action('my_hourly_event', 'do_this_hourly');

function my_active() {
	if (!wp_next_scheduled('my_hourly_event')) {

		wp_schedule_event(time(), 'hourly', 'my_hourly_event');

	}
}

add_action('wp', 'my_active');

function do_this_hourly() {
	global $wpdb;

	function curl_get_file_contents($URL) {
		$c = curl_init();
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_URL, $URL);
		$contents = curl_exec($c);
		curl_close($c);

		if ($contents) {
			return $contents;
		} else {
			return FALSE;
		}

	}

	$xmlString = curl_get_file_contents("https://www.cbr-xml-daily.ru/daily_utf8.xml");
	$xml = simplexml_load_string($xmlString);
	$usd = str_replace(",", ".", $xml->Valute[10]->Value);
	$eur = str_replace(",", ".", $xml->Valute[11]->Value);

	$wpdb->insert('wp_cur', array(
		'usd' => $usd,
		'eur' => $eur,

	), array(
		'%f',
		'%f',
	));

}

function firbo_news_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('firbo_news_content_width', 640);
}
add_action('after_setup_theme', 'firbo_news_content_width', 0);

function fb_move_admin_bar() {
	echo '
    <style type="text/css">
    body {
    margin-top: -28px;
    padding-bottom: 28px;
    }
    body.admin-bar #wphead {
       padding-top: 0;
    }
    body.admin-bar #footer {
       padding-bottom: 28px;
    }
    #wpadminbar {
        top: auto !important;
        bottom: 0;
    }
    #wpadminbar .quicklinks .menupop ul {
        bottom: 28px;
    }
    </style>';
}
// on backend area
add_action('admin_head', 'fb_move_admin_bar');
// on frontend area
add_action('wp_head', 'fb_move_admin_bar');

// get specific header logo

function echo_heder_logo() {
	global $wp;
	if (home_url($wp->request) == get_home_url()) {
		echo '<a href="https://firbo.ru/">
                        <img src="' . get_template_directory_uri() . '/images/logo.svg" alt="" class="header-logo header-logo-to-main">
                     </a>';
	} else {
		echo '<a href="' . get_home_url() . '">
	                       <img src="' . get_template_directory_uri() . '/images/forMain.svg" alt="" class="header-logo">
                     </a>';
	}
	;

};
// function get_heder_logo_url() {
// 	global $wp;
// 	if (home_url($wp->request) == get_home_url()) {
// 		return 'https://firbo.ru/';
// 	}
// 	return get_home_url();
//
// };

function wpbeginner_numeric_posts_nav() {

	if (is_singular()) {
		return;
	}

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if ($wp_query->max_num_pages <= 1) {
		return;
	}

	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max = intval($wp_query->max_num_pages);

	/** Add current page to the array */
	if ($paged >= 1) {
		$links[] = $paged;
	}

	/** Add the pages around the current page to the array */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if (($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<nav class="pagination"><ul class="dot-nav">' . "\n";

	/** Previous Post Link */
	if (get_previous_posts_link()) {
		printf('<li>%s</li>' . "\n", get_previous_posts_link('<'));
	}

	/** Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links)) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

		if (!in_array(2, $links)) {
			echo '<li>…</li>';
		}

	}

	/** Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array) $links as $link) {
		$class = $paged == $link ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
	}

	/** Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links)) {
		if (!in_array($max - 1, $links)) {
			echo '<li>…</li>' . "\n";
		}

		$class = $paged == $max ? ' class="active"' : '';
		printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
	}

	/** Next Post Link */
	if (get_next_posts_link()) {
		printf('<li>%s</li>' . "\n", get_next_posts_link('>'));
	}

	echo '</ul></nav>' . "\n";

}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function firbo_news_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar', 'firbo-news'),
		'id' => 'sidebar-1',
		'description' => esc_html__('Add widgets here.', 'firbo-news'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('news page sidebar', 'firbo-news'),
		'id' => 'news',
		'description' => esc_html__('Сайдбар страницы новостей', 'firbo-news'),
		
		
	));
}
add_action('widgets_init', 'firbo_news_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function firbo_news_scripts() {
	wp_enqueue_style('firbo-news-style', get_stylesheet_uri());

	wp_enqueue_script('firbo-news-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('firbo-news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'firbo_news_scripts');

// добавление окончания числительным

function plural_form($number, $after) {
  $cases = array (2, 0, 1, 1, 1, 2);
  echo $number.' '.$after[ ($number%100>4 && $number%100<20)? 2: $cases[min($number%10, 5)] ];
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add widgets.
 */
require get_template_directory() . '/widgets/random-news-widget.php';
require get_template_directory() . '/widgets/tags-widget.php';
require get_template_directory() . '/widgets/social-widget.php';
require get_template_directory() . '/widgets/link-widgets.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
