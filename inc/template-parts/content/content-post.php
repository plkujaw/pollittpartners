<?php

// Categories
$cats = get_the_category();
$cats_array = array();
$featured_video = get_field('post_featured_video', $post->ID);


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
      <?php if ($featured_video) : ?>
        <div class="post-card__video">
          <a href="<?php the_permalink(); ?>">
            <video autoplay muted loop playsinline defaultMuted>
              <source src="<?php echo esc_url($featured_video['url']) ?>" type="<?php echo $featured_video['mime_type'] ?>">
            </video>
          </a>
        </div>
      <?php else : ?>
        <div class="post-card__image entry-featured">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('entry'); ?>
          </a>
        </div>
      <?php endif; ?>
      <div class="post-card__text-wrap entry-wrap">
        <h2 class="post-card__title font-size-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-card__text font-size-regular"><?php echo get_the_excerpt(); ?></p>
        <div class="post-card__date entry-meta">
          <?php if ($cats_output) : ?>
            <span class="post-card__categories"><?php echo $cats_output; ?></span>
          <?php endif; ?>
          <?php echo $date; ?>
        </div>
      </div>
    </div>
  </article>
<?php endif; ?>