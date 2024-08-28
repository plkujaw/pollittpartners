<?php

/**
 * Block Name: Copy
 *
 * This is the template that displays the Copy block.
 */
$content = get_field('copy_content');
$align = get_field('copy_align');
$width = get_field('copy_width');
$background = get_field('copy_background');
$font_size = get_field('copy_font_size');
$font_weight = get_field('copy_font_weight');
?>

<section class="copy bg-<?php echo $background; ?> width-<?php echo $width ?> ">
  <div class="container">
    <article class="wysiwyg font-size-<?php echo $font_size; ?> <?php echo $font_weight === 'thin' ? "font-size-$font_size--thin" : ''; ?> align-<?php echo $align; ?> lazy-load js-lazy-load">
      <?php echo $content; ?>
    </article>
  </div>
</section>