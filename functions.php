<?php

/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme
 * @since Theme 1.0
 */



if (!function_exists('theme_support')) :

  function theme_support()
  {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_post_type_support('page', 'excerpt');

    register_nav_menus(
      array(
        'primary-menu' => __('Primary Menu'),
        // 'secondary-menu' => __('Secondary Menu')
      )
    );

    // Register Image sizes
    add_image_size('entry-small', 400); // 400 pixels wide (and unlimited height)
    add_image_size('entry', 800); // 800 pixels wide (and unlimited height)
    add_image_size('entry-large', 1250); // 1250 pixels wide (and unlimited height)
    add_image_size('hero', 2000); // 2000 pixels wide (and unlimited height)


    // Add ACF Options Page
    if (function_exists('acf_add_options_page')) {
      acf_add_options_page(array(
        'page_title'   => 'Website Options',
        'menu_title'  => 'Website Options',
        'position' => 61,
      ));
    }
  }
endif;

add_action('after_setup_theme', 'theme_support');


function remove_thumbnail_support()
{
  remove_post_type_support('page', 'thumbnail');
}
add_action('init', 'remove_thumbnail_support');

if (!function_exists('theme_preload_webfonts')) :
  function theme_preload_webfonts()
  {
?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/AkkuratPro-Regular.woff2')); ?>" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/AkkuratPro-Bold.woff2')); ?>" as="font" type="font/woff2" crossorigin>
<?php
  }
endif;
add_action('wp_head', 'theme_preload_webfonts');

// Implement Additional files
//==========

/**
 * Enqueue styles/scripts
 */
require_once get_template_directory() . '/inc/functions-includes/enqueue.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/functions-includes/extras.php';

/**
 * Load Cleanup file
 */
require_once get_template_directory() . '/inc/functions-includes/wordpress-cleanup.php';

/**
 * Custom User Capabilities
 */
require_once get_template_directory() . '/inc/functions-includes/custom-user-capabilities.php';

/**
 * Google Tag Manager
 */
// require_once get_template_directory() . '/inc/functions-includes/gtm.php';

/**
 * 
 * Login Page Styling
 */
require_once get_template_directory() . '/inc/functions-includes/login-page-styling.php';

/**
 * Load Custom Posts file
 */
require_once get_template_directory() . '/inc/functions-includes/custom-posts.php';

/**
 * Load Custom Taxonomies file
 */
require_once get_template_directory() . '/inc/functions-includes/custom-taxonomies.php';

/**
 * Load Gutenberg Blocks Registration file
 */
require get_template_directory() . '/inc/template-parts/blocks/register-blocks.php';

