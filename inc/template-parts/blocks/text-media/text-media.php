<?php

/**
 * Block Name: Text + Media
 *
 * This is the template that displays the Text + Media block.
 */
$title = get_field('text_media_title');
$copy = get_field('text_media_text');
$cta = get_field('text_media_cta');
$media_type = get_field('text_media_media_type');
$media_sticky = get_field('text_media_media_sticky');
$image = get_field('text_media_image');
$video = get_field('text_media_video');

?>

<section class="text-media <?php echo $media_sticky ? 'sticky-media' : '' ?>" data-body-bg="tertiary">
  <div class="container lazy-load js-lazy-load">
    <div class="text-media__inner">
      <div class="text-media__text">
        <h3 class="text-media__title font-size-title"><?php echo $title; ?></h3>
        <article class="wysiwyg"><?php echo $copy; ?></article>
        <?php if (!empty($cta)) { ?>
          <a class="link-arrow link-arrow--2 link-underline link-underline--black font-size-title" href="<?php echo esc_url($cta['url']) ?>" target="<?php echo esc_attr($cta['target']) ?>">
            <?php echo $cta['title'];
            get_template_part('inc/template-parts/icon/icon', 'arrow-right-2.svg') ?></a>
        <?php } ?>
      </div>
      <?php if ($media_type == 'image') { ?>
        <div class="text-media__media">
          <?php echo wp_get_attachment_image($image, 'entry-large'); ?>
        </div>
      <?php
      } else { ?>
        <div class="text-media__media text-media__media--video">
          <video autoplay muted loop playsinline defaultMuted>
            <source src=" <?php echo esc_url($video['url']) ?>" type="<?php echo $video['mime_type'] ?>">
          </video>
        </div>
      <?php } ?>
    </div>
  </div>
</section>