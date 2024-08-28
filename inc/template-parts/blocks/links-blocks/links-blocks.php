<?php

/**
 * Block Name: Links Blocks
 *
 * This is the template that displays the Links Blocks block.
 */

$title = get_field('links_blocks_title');
$text = get_field('links_blocks_text');
$links = get_field('links_blocks_links');

?>

<section class="links-blocks" data-body-bg="white">
  <div class="container lazy-load js-lazy-load">
    <div class="links-blocks__title">
      <h3 class="font-size-title"><?php echo $title; ?></h3>
    </div>

    <div class="links-blocks__text">
      <p class="font-size-h3 font-size-h3--thin"><?php echo $text; ?></p>
    </div>

    <div class="links-blocks__links">
      <?php if ($links) {
        foreach ($links as $link) {
          $link_url = $link['link_url'];
          $link_title = $link['link_title'];
          $link_description = $link['link_description'];
          if (empty($link_url)) {
            $link_url = '#';
          }
      ?>
          <a href="<?php echo (esc_url($link_url)) ?>">
            <div class="link-arrow">
              <?php
              get_template_part('inc/template-parts/icon/icon', 'arrow-right-1.svg') ?>
            </div>
            <div class="link-title">
              <h2 class="font-size-h2"><?php echo $link_title ?></h2>
            </div>
            <div class="link-description">
              <p class="font-size-regular"><?php echo $link_description ?></p>
            </div>
          </a>
      <?php }
      } ?>
    </div>
  </div>
</section>