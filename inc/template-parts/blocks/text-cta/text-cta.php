<?php

/**
 * Block Name: Text + CTA
 *
 * This is the template that displays the Text + CTA block.
 */
$title = get_field('text_cta_title');
$copy = get_field('text_cta_text');
$cta = get_field('text_cta_cta');
?>

<section class="text-cta" data-body-bg="black">
  <div class="container lazy-load js-lazy-load">
    <div class="text-cta__inner">
      <div class="text-cta__text">
        <h3 class="font-size-title"><?php echo $title; ?></h3>
        <p class="font-size-h3 font-size-h3--thin"><?php echo $copy; ?></p>
        <?php if (!empty($cta)) { ?>
          <a class="link-arrow link-arrow--2 link-underline font-size-title" href="<?php echo esc_url($cta['url']) ?>" target="<?php echo esc_attr($cta['target']) ?>">
            <?php echo $cta['title'];
            get_template_part('inc/template-parts/icon/icon', 'arrow-right-2.svg') ?></a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>