<?php

/**
 * Block Name: Logo Grid
 *
 * This is the template that displays the Logo Grid block.
 */

$title = get_field('logo_grid_title');
$items = get_field('logo_grid_items');

?>

<section class="logo-grid">
  <div class="container lazy-load js-lazy-load">
    <div class="logo-grid__title">
      <h2><?php echo $title; ?></h2>
    </div>
    <?php if ($items) { ?>
      <div class="logo-grid__logos">
        <?php
        foreach ($items as $item) {
          $logo = $item['image'];
          $caption = $item['caption']
        ?>
          <div class="logo-wrapper">
            <div class="logo-grid__logo">
              <?php echo wp_get_attachment_image($logo, 'entry-small') ?>
            </div>
            <div class="logo-grid__caption">
              <p class="font-size-regular"><?php echo $caption ?></p>
            </div>
          </div>
      <?php }
      } ?>
      </div>
  </div>
</section>