<?php

/**
 * Block Name: People Carousel
 *
 * This is the template that displays the People Carousel block.
 */
$title = get_field('team_members_title');
$people = get_field('team_members');
$block_id = $block['id'];

?>

<section class="people-carousel" data-id="<?php echo $block_id ?>">
  <div class="container lazy-load js-lazy-load">
    <div class="people-carousel__top">
      <h2><?php echo $title; ?></h2>
      <div class="swiper-navigation">
        <button class="btn swiper-button-prev <?php echo $block_id ?>">
          <?php
          get_template_part('inc/template-parts/icon/icon', 'arrow-right-1.svg') ?>
        </button>
        <button class="btn swiper-button-next <?php echo $block_id ?>">
          <?php
          get_template_part('inc/template-parts/icon/icon', 'arrow-right-1.svg') ?>
        </button>
      </div>
    </div>
  </div>
  <div class="container lazy-load js-lazy-load">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php foreach ($people as $person) {
          $picture = get_the_post_thumbnail($person->ID, 'entry-small');
          $name = $person->post_title;
          $position = get_field('person_position', $person->ID);
        ?>
          <div class="swiper-slide">
            <a href="<?php the_permalink($person); ?>">
              <picture><?php echo $picture ?></picture>
              <h3 class="font-size-title"><?php echo $name; ?></h3>
              <h4 class="font-size-regular"><?php echo $position; ?></h4>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>

</section>