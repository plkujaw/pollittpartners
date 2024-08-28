<?php

/**
 * Block Name: Media Carousel
 *
 * This is the template that displays the Media Carousel block.
 */

$slides = get_field('media_carousel_slides');
$block_id = $block['id'];

?>

<section class="media-carousel" data-id="<?php echo $block_id ?>">
  <div class="container lazy-load js-lazy-load">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php foreach ($slides as $slide) {
          $media_type = $slide['media_type'];
          $image = $slide['image'];
          $video = $slide['video'];
        ?>
          <div class="swiper-slide">
            <div class="slide-media">
              <?php if ($media_type == 'image') {
                echo wp_get_attachment_image($image, 'hero');
              } else { ?>
                <video autoplay muted loop playsinline defaultMuted>
                  <source src="<?php echo esc_url($video['url']) ?>" type="<?php echo $video['mime_type'] ?>">
                </video>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      </div>
      <?php if (!wp_is_mobile()) {
      ?>
        <div class="swiper-navigation">
          <button class="btn swiper-button-prev <?php echo $block_id ?>" data-type="carousel-nav" data-nav="prev"></button>
          <button class="btn swiper-button-next <?php echo $block_id ?>" data-type="carousel-nav" data-nav="next"></button>
        </div>

      <?php
      } ?>

    </div>
    <div class="swiper-pagination font-size-h3 font-size-h3--thin <?php echo $block_id ?>"></div>
  </div>
</section>