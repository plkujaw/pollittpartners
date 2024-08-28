<?php

$next_project = $args['next-project'][0];
$title = $next_project->post_title;
$thumbnail_img = get_post_thumbnail_id($next_project->ID);
$thumbnail_video = get_field('project_featured_video', $next_project->ID);
$cover_image = get_field('next_project_cover_image');
$url = get_permalink($next_project);
?>

<section class="next-project lazy-load js-lazy-load">
  <div class="container">
    <hr class="divider">
    <div class="next-project__wrapper">
      <a href="<?php echo esc_url($url) ?>" class="next-project-link">
        <div class="next-project__bg">
          <?php if ($cover_image) { ?>
            <?php echo wp_get_attachment_image($cover_image, 'full'); ?>
          <? } else if ($thumbnail_video) { ?>
            <video autoplay muted loop playsinline defaultMuted>
              <source src="<?php echo esc_url($thumbnail_video['url']) ?>" type="<?php echo $thumbnail_video['mime_type'] ?>">
            </video>
          <?php  } else { ?>
            <?php echo wp_get_attachment_image($thumbnail_img, 'full'); ?>
          <?php } ?>
        </div>
        <div class="next-project__text">
          <h3>Pollitt & <?php echo $title; ?></h3>
          <p>Next project</p>
        </div>
      </a>
    </div>
  </div>
</section>