<?php

/**
 * Block Name: Vertical Carousel
 *
 * This is the template that displays the Vertical Carousel block.
 */

$slides = get_field('vertical_carousel_slides');

?>

<section class="vertical-carousel" data-body-bg="black">
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <?php foreach ($slides as $slide) {
        $title = $slide['title'];
        $media_type = $slide['media_type'];
        $image = $slide['image'];
        $video = $slide['video'];
        $link = $slide['link']; ?>

        <div class="swiper-slide">
          <div class="slide-title">
            <div class="container">
              <h2 data-swiper-parallax="-200"><?php echo $title; ?></h2>
            </div>
          </div>
          <div class="slide-media">
            <a href="<?php echo !empty($link) ? esc_url($link['url']) : '' ?>" data-type="project">
              <?php if ($media_type === 'image') {
                echo wp_get_attachment_image($image, 'full', false, array("data-swiper-parallax" => "200"));
              } else {
              ?>
                <video autoplay muted loop playsinline defaultMuted>
                  <source src="<?php echo esc_url($video['url']) ?>" type="<?php echo $video['mime_type'] ?>">
                </video>
              <?php
              }

              ?>

            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>