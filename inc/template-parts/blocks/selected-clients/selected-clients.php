<?php

/**
 * Block Name: Selected Clients
 *
 * This is the template that displays the Selected Clients block.
 */

$title = get_field('selected_clients_title');
$logos = get_field('selected_clients_logos');
// $developments = get_field('selected_clients_developments');
$project_groups = get_field('selected_clients_groups');

?>

<section class="selected-clients" data-body-bg="black">
  <div class="container lazy-load js-lazy-load">
    <div class="selected-clients__title">
      <h2 class="font-size-h2"><?php echo $title; ?></h2>
    </div>
    <div class="selected-clients__control">
      <button class="btn font-size-title js-view-by-client active js-tab-btn" type='button' data-show="client">View by client</button>
      <button class="btn font-size-title js-view-by-project js-tab-btn" type='button' data-show="project">View by developments</button>
      <!-- <button class="btn font-size-title js-view-by-project js-tab-btn" type='button' data-show="development">View by development</button> -->
    </div>
    <hr class="divider">
    <div class="selected-clients__lists-wrap lazy-load js-lazy-load">
      <div class="selected-clients__list-by-client js-tab active" data-list="client">
        <?php
        foreach ($logos as $logo) {
          echo "<div class='client-logo'>" . wp_get_attachment_image($logo, 'entry', null, array('class' => 'style-svg', 'loading' => 'lazy')) . "</div>";
        }
        ?>
      </div>
      <div class="selected-clients__list-by-project js-tab" data-list="project">
        <?php
        foreach ($project_groups as $group) {
          $group_title = $group['title'];
          $group_items = $group['items']; ?>

          <div class="projects-list-wrapper font-size-regular lazy-load js-lazy-load">
            <h4><strong><?php echo $group_title ?></strong></h4>
            <?php if ($group_items)
              foreach ($group_items as $item) { ?>
              <ul>
                <li><?php echo $item['name']; ?></li>
              </ul>
            <?php
              } ?>
          </div>
        <?php } ?>
      </div>
      <!-- <div class="selected-clients__list-by-client js-tab" data-list="development">
        <?php if ($developments) {
          foreach ($developments as $development) {
            echo "<div class='client-logo'>" . wp_get_attachment_image($development, 'entry', null, array('class' => 'style-svg')) . "</div>";
          }
        }
        ?>
      </div> -->
    </div>
  </div>
</section>