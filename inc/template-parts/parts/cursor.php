<?php if (!wp_is_mobile()) { ?>
  <div class="cursor">
    <div class="cursor-circle"></div>
    <div class="cursor-circle cursor-circle--project"><strong>VIEW<br>PROJECT</strong></div>
    <div class="cursor-circle cursor-circle--nav" data-nav="prev"><?php get_template_part('inc/template-parts/icon/icon', 'arrow-right-1.svg') ?></div>
    <div class="cursor-circle cursor-circle--nav" data-nav="next"><?php get_template_part('inc/template-parts/icon/icon', 'arrow-right-1.svg') ?></div>
  </div>
<? }
?>