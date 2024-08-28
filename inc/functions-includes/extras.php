<?php

/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Theme
 * @since Theme 1.0
 */

/**
 * Clickjacking protection
 *
 * Add header to stop site loading in an iFrame.
 **/
function theme_headers()
{
  header('X-Frame-Options: SAMEORIGIN');
  header('X-UA-Compatible: IE=edge,chrome=1');
  header('Content-Security-Policy: frame-ancestors \'self\'  ;');
}
add_action('send_headers', 'theme_headers', 10);

// Add brand colours to Colour-Picker Pallettes in admin area
function klf_acf_input_admin_footer()
{ ?>
  <script type="text/javascript">
    (function() {
      acf.add_filter('color_picker_args', function(args, $field) {
        // add the hexadecimal codes here for the colors you want to appear as swatches
        args.palettes = ['#000000', '#FFFFFF']
        // return colors
        return args;
      });
    })();
  </script>
<?php }

add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');

// Disable Notification Emails for Plugin Updates
add_filter('auto_plugin_update_send_email', '__return_false');

function get_number($string)
{
  return preg_replace("/\D+/", '', $string);
}

function cta_arrow_right($text)
{
  echo $text . get_template_part('inc/template-parts/icon/icon', 'arrow-right.svg');
}



//estimated reading time
function reading_time($post)
{

  $blocks = parse_blocks($post->post_content);

  $total_words = intval(0);
  foreach ($blocks as $block) {
    if ('acf/copy' === $block['blockName']) {
      $content = $block['attrs']['data']['copy_content'];
      $word_count = intval(str_word_count(strip_tags($content)));
      $total_words += $word_count;
    }
  }

  $readingtime = ceil($total_words / 200);

  // if ($readingtime == 1) {
  //   $timer = " minute";
  // } else {
  //   $timer = " minutes";
  // }
  // $totalreadingtime = $readingtime . $timer;

  return $readingtime . ' MINUTE READ';
}


//ADDING AN ACTIVE CLASS TO THE CUSTOM POST-TYPE MENU ITEM WHEN VISITING ITS SINGLE POST PAGES
function custom_active_item_classes($classes = array(), $menu_item)
{
  if (in_array('current-menu-item', $classes)) {
    $classes[] = 'active ';
  }

  if (((is_single() && 'project' == get_post_type()) || is_post_type_archive('project')) && 'Our work' == $menu_item->title && !in_array('current-menu-item', $classes)) {
    $classes[] .= 'current-menu-item active'; // setting current menu item      
  }

  if (((is_single() && 'job' == get_post_type()) || is_post_type_archive('job')) && 'Join us' == $menu_item->title && !in_array('current-menu-item', $classes)) {
    $classes[] .= 'current-menu-item active'; // setting current menu item      
  }

  if (((is_single() && 'person' == get_post_type()) || is_post_type_archive('person')) && 'About us' == $menu_item->title && !in_array('current-menu-item', $classes)) {
    $classes[] .= 'current-menu-item active'; // setting current menu item      
  }

  if (((is_category() || is_tag()) || (is_single() && 'post' == get_post_type())) && 'Inside the studio' == $menu_item->title && !in_array('current-menu-item', $classes)) {
    $classes[] .= 'current-menu-item active'; // setting current menu item      
  }

  return $classes;
}
add_filter('nav_menu_css_class', 'custom_active_item_classes', 10, 2);


// load more posts

function load_more_posts()
{
  $more_posts = new WP_Query([
    'paged' => $_POST['paged'],
  ]);

  $response = '';
  $max_pages = $more_posts->max_num_pages;

  if ($more_posts->have_posts()) {
    ob_start();
    while ($more_posts->have_posts()) : $more_posts->the_post();
      $response .=
        get_template_part('inc/template-parts/content/content', 'post');
    endwhile;
    $output = ob_get_contents();
    ob_end_clean();
  } else {
    $response = '';
  }

  $result = [
    'max' => $max_pages,
    'html' => $output,
  ];

  echo json_encode($result);
  exit;
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
