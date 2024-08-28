<?php


get_header();
?>

<section class="page-top">
  <?php if (!is_home()) { ?>
    <div class="container lazy-load js-lazy-load">
      <h1 class="page-title">
        <?php echo get_the_title(); ?>
      </h1>
    </div>
  <?php } ?>
</section>

<?php
the_content();

get_footer();
