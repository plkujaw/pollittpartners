<?php

/**
 * The template for displaying the error 404 page
 *
 *
 */

get_header();

$backround_image = get_field('error404_background', 'option') ?>

<div class="error404__img">
  <?php echo wp_get_attachment_image($backround_image, 'full') ?>
</div>
<div class="error404__text">
  <div class="inner">
    <h1>404</h1>
    <h2>Page not found</h2>
    <a href="<?php echo site_url() ?>" class="link-arrow link-arrow--2">Back to homepage
      <?php get_template_part('inc/template-parts/icon/icon', 'arrow-right-2.svg'); ?></a>
  </div>
</div>

<?php get_footer();
