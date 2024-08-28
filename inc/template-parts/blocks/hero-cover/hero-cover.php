<?php

/**
 * Block Name: Hero Cover
 *
 * This is the template that displays the Hero Cover block.
 */

$media_type = get_field('hero_cover_media');
$image = get_field('hero_cover_image');
$video = get_field('hero_cover_video');
$title = get_field('hero_cover_title');


?>

<section class="hero-cover">
  <div class="hero-cover__media" data-rellax-speed="2">
    <?php if ($media_type == 'image') {
      echo wp_get_attachment_image($image, 'hero');
    } else { ?>
      <video autoplay muted loop playsinline defaultMuted>
        <source src="<?php echo esc_url($video['url']) ?>" type="<?php echo $video['mime_type'] ?>">
      </video>
    <?php } ?>
  </div>
  <div class="hero-cover__title">
    <div class="container">
      <h1><strong><?php echo $title; ?></strong></h1>
    </div>
  </div>
  <div class="hero-cover__arrow">
    <?php get_template_part('inc/template-parts/icon/icon', 'arrow-down.svg'); ?>
    <p><strong>SCROLL</strong></p>
  </div>
</section>