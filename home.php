<?php get_header()
?>

<section class="page-top">
  <?php if (is_home()) { ?>
    <div class="container lazy-load js-lazy-load">
      <h1 class="page-title">
        <?php echo get_the_title(get_option('page_for_posts', true)); ?>
      </h1>
      <h2 class="page-subtitle font-size-h3 font-size-h3--thin">
        <?php echo get_the_excerpt(get_option('page_for_posts', true)); ?>
      </h2>
    </div>
  <?php } ?>
</section>

<section class="post-list">
  <div class="container">
    <div class="post-list__wrapper col-3">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
        ?>
          <?php get_template_part('inc/template-parts/content/content', 'post'); ?>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>

    <?php
    $pages = $wp_query->max_num_pages;
    if ($pages > 1) { ?>
      <div class="load-more pagination">
        <button type="button" class="btn" id="load-more">Load more +</button>
      </div>
    <?php } ?>
  </div>
</section>

<?php get_footer();
