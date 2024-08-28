<?php

/**
 * Block Name: Services List
 *
 * This is the template that displays the Services List block.
 */

$title = get_field('services_list_title');
$text = get_field('services_list_text');
$services = get_field('services_list');
?>

<section class="services-list">
  <div class="container lazy-load js-lazy-load">
    <div class="services-list__title">
      <h3 class="font-size-title"><?php echo $title; ?></h3>
    </div>

    <div class="services-list__text">
      <p class="font-size-regular"><?php echo $text; ?></p>
    </div>

    <div class="services-list__services">
      <?php
      if (!empty($services)) {
        echo '<ul>';
        foreach ($services as $service) {
          $service = $service['service'];
          if (!empty($service)) {
      ?>
            <li>
              <a href="<?php echo esc_url($service['url']); ?>" class="link-underline"><?php echo $service['title']; ?></a>
            </li>
      <?php }
        }
      }
      echo '</ul>'; ?>
    </div>
  </div>
</section>