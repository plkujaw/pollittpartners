<?php

/**
 * Block Name: Info Grid
 *
 * This is the template that displays the Info Grid block.
 */

$items = get_field('info_grid_items');

?>

<section class="info-grid">
  <div class="container lazy-load js-lazy-load">
    <?php if ($items) { ?>
      <div class="info-grid__items">
        <?php
        foreach ($items as $item) {
        ?>
          <div class="info-grid__item wysiwyg">
            <?php echo $item['item']; ?>
          </div>
      <?php }
      } ?>
      </div>
  </div>
</section>