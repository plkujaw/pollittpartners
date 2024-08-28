<?php

/**
 * Block Name: Media
 *
 * This is the template that displays the Media block.
 */

$image = get_field('image_scroll');
$background_colour = get_field('image_scroll_background_colour');
$background_image = get_field('image_scroll_background_image');


if ($background_colour) {
  $background = $background_colour;
} elseif ($background_image) {
  $background = "url('$background_image') no-repeat center;background-size:cover;";
}

?>

<section class="image-scroll" style="background:<?php echo $background; ?>">
  <div class="container lazy-load js-lazy-load">
    <div class="image-scroll__inner">
      <?php echo wp_get_attachment_image($image, 'full') ?>
    </div>
  </div>
</section>