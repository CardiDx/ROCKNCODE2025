<?php

/**
 * style functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package style
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (! function_exists('style_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function style_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on style, use a find and replace
		 * to change 'style' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('style', get_template_directory() . '/languages');

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'style'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'style_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'style_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function style_content_width()
{
	$GLOBALS['content_width'] = apply_filters('style_content_width', 640);
}
add_action('after_setup_theme', 'style_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function style_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'style'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'style'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'style_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function style_scripts()
{
	wp_enqueue_style('style-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('style-style', 'rtl', 'replace');

	wp_enqueue_script('style-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'style_scripts');

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
 * Custom options page and post types.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Custom shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Disable Emoji support introduced in WP 4.2
 */
function pss_disable_emoji()
{

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'pss_disable_emoji');


add_action('wp_default_scripts', 'my_theme_deregister_styles');

function my_theme_deregister_styles()
{
	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library'); //все стили редактора
	wp_dequeue_style('global-styles');
	wp_dequeue_style('classic-theme-styles');
}

//просмоттры на постах
function track_post_views($post_id)
{
	// Проверяем, что это не администратора (чтобы не засчитывать просмотры при редактировании)
	if (is_single() && !is_admin()) {
		// Получаем IP-адрес пользователя
		$ip_address = $_SERVER['REMOTE_ADDR'];

		// Получаем значение мета-поля для поста
		$views = get_post_meta($post_id, 'post_views', true);

		// Если просмотры не установлены, инициализируем
		if (empty($views)) {
			$views = 0;
		}

		// Проверяем, был ли уже просмотр с этого IP-адреса
		$views_ip_key = 'views_' . md5($ip_address); // Ключ для IP

		if (!isset($_COOKIE[$views_ip_key])) {
			// Увеличиваем количество просмотров
			$views++;

			// Обновляем мета-поле
			update_post_meta($post_id, 'post_views', $views);

			// Устанавливаем куки, чтобы этот IP не засчитывался за повторный просмотр в течение суток
			setcookie($views_ip_key, $ip_address, time() + 86400, "/"); // Куки на 1 день
		}
	}
}

// Добавляем хук для отслеживания просмотров
add_action('wp_head', function () {
	if (is_single()) {
		track_post_views(get_the_ID());
	}
});

// Функция для отображения количества просмотров
function get_post_views($post_id)
{
	$views = get_post_meta($post_id, 'post_views', true);
	if ($views == '') {
		$views = 0;
	}
	return $views;
}

//time for reading
function get_reading_time()
{
	// Получаем содержимое поста
	$content = get_post_field('post_content', get_the_ID());

	// Убираем HTML-теги для точности подсчета слов
	$content = strip_tags($content);

	// Подсчитываем количество слов
	$word_count = str_word_count($content);

	// Определяем среднее количество слов, которые человек может прочитать за минуту (например, 200 слов в минуту)
	$words_per_minute = 200;

	// Рассчитываем время на чтение
	$reading_time = ceil($word_count / $words_per_minute);

	// Если время чтения меньше 1 минуты, отображаем "менее 1 минуты"
	if (
		$reading_time < 1
	) {
		$reading_time = 1;
	}

	// Возвращаем время на чтение с учетом правильных окончаний
	$minute_text = ($reading_time == 1) ? 'минута' : 'минут';
	return $reading_time . ' ' . $minute_text;
}
