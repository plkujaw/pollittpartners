<?php

/**
 * Block Name: Posts Loop
 *
 * This is the template that displays the Posts Loop block.
 */

$title = get_field('posts_loop_title');
$selection_type = get_field('posts_loop_selection_type');
$post_type = get_field('posts_loop_post_type');
$background_colour =  get_field('posts_loop_bg');
$posts_per_page = get_field('posts_loop_number_of_posts');
$cta = get_field('posts_loop_cta');
?>

<section class="posts-loop bg-<?php echo $background_colour; ?>" data-body-bg="<?php echo $background_colour; ?>">
  <div class="container lazy-load js-lazy-load">
    <?php if ($title) { ?>
      <div class="posts-loop__title">
        <h2><?php echo $title; ?></h2>
      </div>
    <?php } ?>

    <div class="post-list__wrapper col-<?php echo $post_type == 'post' ? '3' : '2' ?>">
      <?php if ($selection_type == 'recent') {
        $args = array(
          'post_type' => $post_type,
          'posts_per_page' => $posts_per_page
        );
        $recent_posts = new WP_Query($args);
        if ($recent_posts->have_posts()) :
          while ($recent_posts->have_posts()) : $recent_posts->the_post();
            get_template_part('/inc/template-parts/content/content', "$post_type");
          endwhile;
        endif;
      } ?>

      <?php if ($selection_type == 'select') {
        if ($post_type == 'post') {
          $selected_posts = get_field('posts_loop_posts');
        } else {
          $selected_posts = get_field('posts_loop_projects');
        }
        $args = array(
          'post_type' => $post_type,
          'posts_per_page' => $posts_per_page,
          'post__in' => $selected_posts,
          'orderby' => 'post__in'
        );
        $selected_posts = new WP_Query($args);
        if ($selected_posts->have_posts()) :
          while ($selected_posts->have_posts()) : $selected_posts->the_post();
            get_template_part('/inc/template-parts/content/content', "$post_type");
          endwhile;
        endif;
      } ?>
    </div>
    <?php if ($cta) { ?>
      <div class="posts-loop__cta">
        <a href="<?php echo esc_url($cta['url']); ?>" class="link-arrow link-arrow--2">
          <?php echo $cta['title'];
          get_template_part('inc/template-parts/icon/icon', 'arrow-right-2.svg'); ?>
        </a>
      </div>
    <?php } ?>
  </div>
</section>