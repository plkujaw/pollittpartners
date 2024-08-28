<?php

/**
 * Block Name: Projects
 *
 * This is the template that displays the Projects block.
 */

// Categories
$cats = get_the_category();
$cats_array = array();

if (!empty($cats)) {
  $cats_array[] = $cats[0]->name;
}

$cats_output = (!empty($cats_array)) ? ' ' . join(', ', $cats_array) : '';

$date = sprintf(
  '<time class="entry-date" datetime="%1$s">%2$s</time>',
  esc_attr(get_the_date('c')),
  esc_html(get_the_date())
);

$columns = get_field('projects_columns');

?>

<section class="projects">
  <?php echo count($columns) > 1 ? "<div class='container lazy-load js-lazy-load'>" : '' ?>
  <div class="media__inner col-<?php echo count($columns) ?>">
    <?php foreach ($columns as $column) {
      $use_additional_media = $column['use_additional_media'];
      $project = $column['project'];
      $offset = $column['offset'];
      if ($offset && (array_search($column, $columns) === 0)) {
        $offset = 'offset-right';
      } elseif ($offset && (array_search($column, $columns) === 1)) {
        $offset = 'offset-left';
      } else {
        $offset = '';
      }

      $additional_image = $column['additional_image'];
      $additional_image_mobile = $column['additional_image_mobile'];
      $additional_video = $column['additional_video'];

    ?>
      <div class="media__col <?php echo $offset; ?> lazy-load js-lazy-load">
        <?php
        $args = array(
          'post_type' => 'project',
          'post__in' => $project
        );
        $projects = new WP_Query($args);
        if ($projects->have_posts()) :
          while ($projects->have_posts()) : $projects->the_post();
            $featured_video = get_field('project_featured_video', get_the_ID());
            $featured_image_mobile = get_field('project_featured_image_mobile', get_the_ID());
            if ($additional_image_mobile) {
              $featured_image_mobile = $additional_image_mobile;
            }
            if ($additional_video) {
              $featured_video = $additional_video;
            }
        ?>
            <article <?php post_class(); ?>>
              <div class="post-card">
                <div class="post-card__text-wrap entry-wrap">
                  <h2 class="post-card__title font-size-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p class="post-card__text font-size-regular"><?php echo get_the_excerpt(); ?></p>
                </div>

                <?php if (!$featured_video) : ?>
                  <div class="post-card__image entry-featured">
                    <a href="<?php the_permalink(); ?>" data-type="project">
                      <?php if ($additional_image) {
                        echo wp_get_attachment_image($additional_image, 'full', false, array('class' => 'img-desktop'));
                        echo wp_get_attachment_image($featured_image_mobile, 'entry', false, array('class' => 'img-mobile'));
                      } elseif ($featured_image_mobile) {
                        the_post_thumbnail('full', array('class' => 'img-desktop'));
                        echo wp_get_attachment_image($featured_image_mobile, 'entry', false, array('class' => 'img-mobile'));
                      } elseif (!$featured_image_mobile) {
                        the_post_thumbnail('full');
                      }
                      ?>
                    </a>
                  </div>
                <?php endif; ?>
                <?php if ($featured_video && !$featured_image_mobile) : ?>
                  <div class="post-card__video">
                    <a href="<?php the_permalink(); ?>" data-type="project">
                      <video autoplay muted loop playsinline defaultMuted>
                        <source src="<?php echo esc_url($featured_video['url']) ?>" type="<?php echo $featured_video['mime_type'] ?>">
                      </video>
                    </a>
                  </div>
                <?php endif; ?>

                <?php if ($featured_video && $featured_image_mobile) : ?>
                  <div class="post-card__video video-desktop">
                    <a href="<?php the_permalink(); ?>" data-type="project">
                      <video autoplay muted loop playsinline defaultMuted>
                        <source src="<?php echo esc_url($featured_video['url']) ?>" type="<?php echo $featured_video['mime_type'] ?>">
                      </video>
                    </a>
                  </div>
                  <div class="post-card__image entry-featured">
                    <a href="<?php the_permalink(); ?>" data-type="project">
                      <?php
                      echo wp_get_attachment_image($featured_image_mobile, 'entry', false, array('class' => 'img-mobile'));
                      ?>
                    </a>
                  </div>
                <?php endif; ?>
                <!-- <?php if ($featured_video && $additional_image) : ?>
                  <div class="post-card__image entry-featured">
                    <a href="<?php the_permalink(); ?>" data-type="project">
                      <?php
                      echo wp_get_attachment_image($additional_image, 'full', false, array('class' => 'img-desktop'));
                      ?>
                    </a>
                  </div>
                <?php endif; ?> -->
              </div>
            </article>
        <?php
          endwhile;
        endif; ?>
      </div>
    <?php }
    ?>
  </div>
</section>