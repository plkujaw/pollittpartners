<?php

/**
 * Block Name: Map
 *
 * This is the template that displays the Map block.
 */

$marker = get_field('map_marker');
?>

<section class="map" data-marker="<?php echo $marker ?>">
  <div class="container lazy-load js-lazy-load">
    <div id="map"></div>
  </div>
</section>