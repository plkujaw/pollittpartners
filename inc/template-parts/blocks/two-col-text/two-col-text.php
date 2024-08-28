<?php

/**
 * Block Name: Two Col Text
 *
 * This is the template that displays the Two Col Text block.
 */
$col_1_text = get_field('two_col_text_col_1')['col_1_text'];
$col_2_text = get_field('two_col_text_col_2')['col_2_text'];
$background_colour = get_field('two_col_text_background_colour');
?>

<section class="two-col-text bg-<?php echo $background_colour; ?>">
  <div class="container lazy-load js-lazy-load">
    <div class="two-col-text__inner col-2">
      <div class="two-col-text__col wysiwyg">
        <?php echo $col_1_text ?>
      </div>
      <div class="two-col-text__col wysiwyg">
        <?php echo $col_2_text ?>
      </div>
    </div>
  </div>
</section>