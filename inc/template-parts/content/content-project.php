<?php

// Categories
$cats = get_the_category();
$cats_array = array();
$featured_video = get_field('project_featured_video', $post->ID);
$featured_image_mobile = get_field('project_featured_image_mobile', $post->ID);


if (!empty($cats)) {
  $cats_array[] = $cats[0]->name;
}

$cats_output = (!empty($cats_array)) ? ' ' . join(', ', $cats_array) : '';

$date = sprintf(
  '<time class="entry-date" datetime="%1$s">%2$s</time>',
  esc_attr(get_the_date('c')),
  esc_html(get_the_date())
);

if (true) : ?>
  <article <?php post_class(); ?>>
    <div class="post-card lazy-load js-lazy-load">
      <div class="post-card__text-wrap entry-wrap">
        <h2 class="post-card__title font-size-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-card__text font-size-regular"><?php echo get_the_excerpt(); ?></p>
      </div>
      <?php if (!$featured_video) : ?>
        <div class="post-card__image entry-featured">
          <a href="<?php the_permalink(); ?>" data-type="project">
            <?php if ($featured_image_mobile) {
              the_post_thumbnail('full', array('class' => 'img-desktop'));
              echo wp_get_attachment_image($featured_image_mobile, 'entry', false, array('class' => 'img-mobile'));
            } elseif (!$featured_image_mobile)
              the_post_thumbnail('full');
            ?>
          </a>
        </div>
      <?php elseif ($featured_video && !$featured_image_mobile) : ?>
        <div class="post-card__video">
          <a href="<?php the_permalink(); ?>" data-type="project">
            <video autoplay muted loop playsinline defaultMuted>
              <source src="<?php echo esc_url($featured_video['url']) ?>" type="<?php echo $featured_video['mime_type'] ?>">
            </video>
          </a>
        </div>
      <?php elseif ($featured_video && $featured_image_mobile) : ?>
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

    </div>
  </article>
<?php endif; ?>