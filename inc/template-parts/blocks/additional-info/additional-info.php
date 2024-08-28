<?php

/**
 * Block Name: Additional Info
 *
 * This is the template that displays the Additional Info block.
 */

$title = get_field('project_additional_info_title');
$items = get_field('project_additional_info');
?>

<section class="additional-info">
  <div class="container lazy-load js-lazy-load">
    <h3 class="additional-info__title">
      <?php echo $title; ?>
    </h3>
    <?php if ($items) { ?>
      <div class="additional-info__items col-<?php echo count($items) ?>">
        <?php foreach ($items as $item) {
        ?>
          <div class="additional-info__item">
            <div class="font-size-xlarge font-size-xlarge--thin">
              <?php echo $item['title']; ?>
            </div>
            <div class="font-size-regular"><?php echo $item['description']; ?></div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>