<?php

/**
 * Block Name: Vertical Spacer
 *
 * This is the template that displays the Vertical Spacer block.
 */

$size_mobile = get_field('vertical_spacer_size_mobile') . 'px';
$size_tablet = get_field('vertical_spacer_size_tablet') . 'px';
$size_desktop = get_field('vertical_spacer_size_desktop') . 'px';
$colour = get_field('vertical_spacer_background_colour');
$block_id = $block['id'];
?>

<div class="vertical-spacer vertical-spacer-<?php echo $block_id ?> bg-<?php echo $colour ?>" aria-hidden="true">
  <?php echo "<style>
    .vertical-spacer-$block_id {
      height: $size_mobile;
    }

    @media screen and (min-width: 768px) {
      .vertical-spacer-$block_id {
        height: $size_tablet;
      }
    }

    @media screen and (min-width: 1280px) {
      .vertical-spacer-$block_id {
        height: $size_desktop;
      }
    }
  </style>" ?>
</div>