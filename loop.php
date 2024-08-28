<?php

/**
 * ------> loop.php
 */

// Categories
$cats = get_the_category();
$cats_array = array();

if ( ! empty( $cats ) ) {
  $cats_array[] = '<a href="' . get_category_link( $cats[0]->term_id ) . '" class="post-card__cat">' . $cats[0]->name . '</a>';
}

$cats_output = ( ! empty( $cats_array ) ) ? ' ' . join( ', ', $cats_array ) : '';

$date = sprintf( '<time class="entry-date" datetime="%1$s">%2$s</time>',
  esc_attr( get_the_date( 'c' ) ),
  esc_html( get_the_date() )
);

if ( true ): ?>
  <article <?php post_class(); ?>>
    <div class="post-card">
      <?php if ( has_post_thumbnail() ): ?>
        <div class="post-card__image entry-featured">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'entry' ); ?></a>
        </div>
      <?php endif; ?>
      <div class="post-card__text-wrap entry-wrap">
        <div class="post-card__date entry-meta">
          <?php if ( $cats_output ): ?>
            <span class="post-card__categories"><?php echo $cats_output; ?></span> -
          <?php endif; ?>
          <?php echo $date; ?>
        </div>
        <h2 class="post-card__title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-card__text entry-excerpt"><?php echo get_the_excerpt(); ?></p>
      </div>
    </div>
  </article>
<?php endif; ?>