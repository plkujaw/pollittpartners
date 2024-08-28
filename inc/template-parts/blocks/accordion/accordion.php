<?php

/**
 * Block Name: Accordion
 *
 * This is the template that displays the Accordion block.
 */

$panels = get_field('accordion_panels');

?>

<section class="accordion-block">
  <div class="container lazy-load js-lazy-load">
    <?php foreach ($panels as $panel) {
      $title = $panel['title'];

      $content_1 = $panel['content_1'];
      $content_1_font_size =  $panel['content_1_font_size'];
      $content_1_font_weight = $panel['content_1_font_weight'];

      $content_2 = $panel['content_2'];
      $content_2_font_size =  $panel['content_2_font_size'];
      $content_2_font_weight = $panel['content_2_font_weight'];
    ?>
      <div class="accordion-block__wrapper accordion js-accordion">
        <h2 class="accordion-block__title font-size-h2 js-accordion-title hoverable"><?php echo $title; ?></h2>
        <button class="btn accordion-block__btn js-accordion-btn" data-text="See">See More +</button>
        <div class="accordion__panel accordion-block__panel js-accordion-panel">
          <article class="wysiwyg font-size-<?php echo $content_1_font_size; ?> <?php echo $content_1_font_weight === 'thin' ? "font-size-$content_1_font_size--thin" : ''; ?> "><?php echo $content_1; ?></article>
          <article class="wysiwyg font-size-<?php echo $content_2_font_size; ?> <?php echo $content_2_font_weight === 'thin' ? "font-size-$content_2_font_size--thin" : ''; ?> "><?php echo $content_2; ?></article>
        </div>
      </div>
    <?php } ?>
  </div>
</section>